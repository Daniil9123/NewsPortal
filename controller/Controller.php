<?php

class Controller {

    public static function StartSite() {
        $arr = News::getLast10News();
        include 'view/start.php';
    }

    public static function AllCategory() {
        $arr = Category::getAllCategory();
        include 'view/category.php';
    }

    public static function AllNews() {
        $arr = News::getAllNews();
        include 'view/allnews.php';
    }

    public static function NewsByCatId($id) {
        $arr = News::getNewsByCategoryId($id);
        include 'view/catnews.php';
    }
    public static function NewsById($id) {
        $n = News::getNewsById($id);
        include 'view/readnews.php';
    }

    public static function error404() {
        include 'view/error404.php';
    }

    public static function InsertComment($c, $id) {
        Comments::InsertComment($c, $id);
        //self::NewsById($id);
        header("Location: news?id=".$id. '#ctable');
    }

    //список комментариев
    public static function Comments($newsid) {
        $arr = Comments::getCommentsByNewsId($newsid);
        ViewComments::CommentsByNews($arr);
    }
    //количество комментариев к новости
    public static function CommentsCount($newsid) {
        $arr = Comments::getCommentsCountByNewsId($newsid);
        ViewComments::CommentsCount($arr);
    }
    //ссылка - переход к списку комментариев
    public static function CommentsCountWithAncor($newsid) {
        $arr = Comments::getCommentsCountByNewsId($newsid);
        ViewComments::CommentsCountWithAncor($arr);
    }
}