<?php
    class index{
        
        //this method takes all news from DB
        public static function getNews(){
            $db = db_connect::connect();

            $news = array();
            $result = $db->query('SELECT * FROM notes');
            $result->setFetchMode(PDO::FETCH_ASSOC);
            if($result){
                $news = $result->fetch();
            }else echo "no result";
            return $news;
        }
    }