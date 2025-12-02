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
}