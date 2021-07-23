<?php
    class profile{
        
        //this method findes user with id
        //contains user info, statistics, etc
        public static function getUserByID($id){
            $db = db_connect::connect();

            $userdata = array();
            $result = $db->query('SELECT * FROM users WHERE id='.$id);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            if($result){
                $userdata = $result->fetch();
            }else echo "no result";
            return $userdata;
        }

        //this method findes logged user
        //contains user info, statistics, etc
        public static function getUserMe(){

        }
        //this method findes users posts
        public static function getUserPosts(){

        }
    }