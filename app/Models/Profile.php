<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['user_id', 'title', 'description', 'url', 'image'];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image:'/profile/Yn19ucPsybXysjMEPN8EqycJl78YskxGhmPuuRtN.png';
        return '/storage/' . $imagePath;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}


