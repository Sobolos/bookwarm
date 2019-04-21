<?php
    class profileController{
        public function actionMe(){
            echo "profileController actionMe";
            return true;
        }

        public function actionView($id){
            echo "profileController actionView <br>";
            echo "viewing profile with id {$id}";
            return true;
        }
    }