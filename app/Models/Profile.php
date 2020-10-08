<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Profile extends Model
{
    protected $fillable = ['user_id', 'title', 'description', 'url', 'image'];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image:'/profile/Yn19ucPsybXysjMEPN8EqycJl78YskxGhmPuuRtN.png';
        return '/storage/' . $imagePath;
    }

    public function photo()
    {
        if ($this->image != null) {
            return '/storage/' . $this->image;
        }
            return '/storage/profile/Yn19ucPsybXysjMEPN8EqycJl78YskxGhmPuuRtN.png';
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}


