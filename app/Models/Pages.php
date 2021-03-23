<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pages extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'pageID',
        'title',
        'body',
        'published'
    ];

    public function getPublishedPages(){
        return DB::table('pages')
            ->where('published', true)
            ->get();
    }

    public function getPageByID($id) {
        $pages = DB::table('pages')
            ->where('pageID', $id)
            ->get();
        if (count($pages) == 0) {
            return null;
        }
        return $pages[0];
    }

}
