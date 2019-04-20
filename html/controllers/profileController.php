<?php
    class profileController{
        public function actionMe(){
            echo "просмотр моего профиля <br>";
            return true;
        }

        public function actionView(){
            echo "просмотр чужого профиля <br>";
            return true;
        }
    }