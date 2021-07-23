<?php

    include_once ROOT . '/models/index.php';

    class indexController{
        public function actionGlobal(){
            $note = index::getNews();
            include_once ROOT . '/views/index.php';
            return true;
        }

        public function actionMynews(){
            $note = index::getNews();
            include_once ROOT . '/views/index.php';
            return true;
        }
    }