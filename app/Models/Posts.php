<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Posts extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'postID',
        'title',
        'body',
        'published'
    ];

    public function getPublishedPages(){
        return DB::table('posts')
            ->where('published', true)
            ->get();
    }

    public function getPostByID($id) {
        $posts = DB::table('posts')
            ->where('postID', $id)
            ->get();
        if (count($posts) == 0) {
            return null;
        }
        return $posts[0];
    }
}
