<?php

namespace App\Http\Controllers;

use App\Models\Flag;
use App\Models\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class FlagController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function setFlag($type, $target)
    {
        if (!Flag::isAllowed($type)) {
            return [];
        }
        $result = Flag::where([
           'author_id' => auth()->user()->id,
           'target_id' => $target,
           'type' => $type,
        ])->get();

        if ($result->isEmpty() && $target != auth()->user()->id) {
            Flag::create([
                'author_id' => auth()->user()->id,
                'target_id' => $target,
                'type' => $type,
            ]);
        } else {
            $this->unsetFlag($type, $target);
        }
    }

    public function getFollow(User $user)
    {
        $followersCount = Cache::remember(
          'count.followers . ' . $user->id,
          now()->addSeconds(0),
          function () use ($user) {
              return $user->followers->count();
          }
        );

        $followingCount = Cache::remember(
          'following.count. ' . $user->id,
          now()->addSeconds(0),
          function () use ($user) {
              return $user->following->count();
          }
        );

//        $followersInfo = Cache::remember(
//          'following.info. ' . $user->id,
//          now()->addSeconds(0),
//          function () use ($user) {
//              $userId = $user->followers->pluck('author_id');
//              dd($userId);
//              return User::whereIn('id', $userId)->get();
//          }
//        );

        $follows = (auth()->user()) ? (!auth()->user()->following()->where('target_id', $user->id)->get()->isEmpty() ? 'Unfollow' : 'Follow') : '';
        $result = collect([
           'followers' => $followersCount,
           'following' => $followingCount,
           'follows' => $follows,
           'follows' => $follows,
//            'followersInfo' => $followersInfo,
        ]);

        return response()->json($result);
    }

    public function unsetFlag($type, $target)
    {
        Flag::where([
           'author_id' => auth()->user()->id,
           'target_id' => $target,
            'type' => $type,
        ])->delete();
    }

}
