<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'task';

    protected $fillable = [
        'name',
        'date',
        'user_id',
        'is_done',
        'is_fav'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
