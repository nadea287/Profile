<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Flag extends Model
{
    protected $fillable = [
      'author_id',
      'target_id',
      'type',
    ];

    static protected $allowed = [
      'follow',
      'like',
      'ban',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function target()
    {
        return $this->belongsTo(User::class, 'target_id');
    }

    public static function isAllowed($key)
    {
        return in_array($key, Flag::$allowed);
    }

}
