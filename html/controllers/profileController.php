<?php

    include_once ROOT.'/models/profile.php';

    class profileController{
        public function actionMe(){
            echo "profileController actionMe";
            return true;
        }

        public function actionView($id){
            if($id){
                $user = profile::getUserByID($id);
                include_once ROOT.'/views/profile.php';
            }
            return true;
        }
    }