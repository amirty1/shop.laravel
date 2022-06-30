<?php

namespace App\Models;

use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable =[
        'user_id',
        'text',
        'parent_id',
        'commentable_id',
        'commentable_type'

    ];


    public function getCreatedAtAttribute($created_at)
    {
        $v1 = new Verta($created_at);
        $v1 = $v1->format('Y/n/j');
        return $v1;
    }

    public function getUpdatedAtAttribute($updated_at)
    {
        $v2 = new Verta($updated_at);
        $v2 = $v2->format('Y/n/j');
        return $v2;
    }


    public function user()
    {

        return $this->belongsTo(User::class);
    }
}
