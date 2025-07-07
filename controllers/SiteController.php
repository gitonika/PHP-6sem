<?php

namespace app\controllers;

use yii\web\Controller;

class SiteController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionRooms()
    {
        return $this->render('rooms');
    }

    public function actionContact()
    {
        return $this->render('contact');
    }
    public function actionFacilities()
{
    return $this->render('facilities');
}
public function actionGallery()
{
    return $this->render('gallery');
}

}
