<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use App\Models\Flag;
use App\Models\Post;
use App\Models\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', compact('user'));
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user->profile);

        return view('profiles.edit', compact('user'));
    }

    public function update(UpdateProfileRequest $request, User $user)
    {
        $this->authorize('update', $user->profile);

        $data = $request->validated();

        if (request('image')) {
        $imagePath = $data['image']->store('profile', 'public');
        $image = Image::make(public_path('/storage/' . $imagePath))->fit(1000, 1000);
        $image->save();
        $imageArray = ['image' => $imagePath];
        }

        auth()->user()->profile()->update(array_merge(
            $data,
            $imageArray ?? []
        ));

        return redirect('/profile/' . $user->id);
    }

    public function destroy(User $user)
    {
        File::delete(public_path() . '/storage/' . $user->profile->image);
        $postsCollections = $user->posts()->pluck('image');
        foreach ($postsCollections as $postsCollection) {
            File::delete(public_path() . '/storage/' . $postsCollection);
        }
        $user->posts()->delete();
        $user->profile->delete();
        $user->delete();
    }
}
