<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class homepage extends Controller
{
    public function index() {
        $model = new Posts();
        $posts = $model->getPublishedPages();
        return view('welcome', compact(['posts']));
    }

    public function viewPost($id) {
        $postID = (int)$id;
        $model = new Posts();
        $post = $model ->getPostByID($postID);
        $post->body = str_replace("\n", '<br>', $post->body);
        return view('posts/viewPostAsGuest', compact(['post']));
    }

    public function delete($id) {
        $postID = (int)$id;
        $model = new Posts();
        $model->deleteByID($postID);
        return Redirect::to('/posts');
    }
}
