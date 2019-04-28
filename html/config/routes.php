<?php
    return array(
        '' => 'index/global', //getNews in indexController
        'news' => 'index/mynews', //getMynews in indexController

        'catalog' => 'catalog/category', //getCatalog in CatalogController

        'profile/([0-9]+)' => 'profile/view/$1', //getIDprofile in profileController
        //'profile/settings' => 'profile/settings', //getSettingsprofile in profileController
        //'profile/subs' => 'profile/subs', //getSubs in profileController
        //'profile/subed' => 'profile/subed', //getSubed in profileController
        'profile' => 'profile/me', //getMyprofile in profileController
    );