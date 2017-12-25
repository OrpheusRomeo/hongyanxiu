<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';
    protected $fillable = ['article_title', 'user_id','article_content', 'type', 'region', 'alias', 'status', 'tag', 'about_films'];

    //获取用户文章
    static function getArticleList($userId){
        return self::query()
            ->select()
            ->where('user_id', '=', $userId)
            ->paginate(10);
    }
    
    //获取某篇文章详情
    static function getArticleDetail($id){
        return self::query()
            ->select()
            ->where('id', '=', $id)
            ->get();
    }



}
