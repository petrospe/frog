<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class RequireLogin extends CBehavior
{
 
public function attach($owner)
{
    $owner->attachEventHandler('onBeginRequest', array($this, 'handleBeginRequest'));
}
 
public function handleBeginRequest($event)
        {
 
            $defaultUrl = ''; //Defualt page will show like - http://localhost/demo or http://example.com/
 
            $request = trim(Yii::app()->urlManager->parseUrl(Yii::app()->request), '/');
 
            $login = trim(Yii::app()->user->loginUrl[0], '/');
            $login = trim(is_array(Yii::app()->user->loginUrl) ? Yii::app()->user->loginUrl[0] : Yii::app()->user->loginUrl, '/'); //gets loginurl from main config file
 
 
            $registration = trim(Yii::app()->params['registrationUrl'], '/'); //gets registraion url from main config file
            $recovery = trim(Yii::app()->params['recoveryUrl'], '/'); //gets recovery url from main config file
 
 
            // Restrict guests to public pages.
            $allowed = array($login,$registration,$recovery,$defaultUrl);
            //allows users if not logged in to view only these 4 pages you can add others like above or like array($login,'site/login');
 
            if (Yii::app()->user->isGuest && !in_array($request, $allowed))
            Yii::app()->user->loginRequired();
 
            // Prevent logged in users from viewing the login page.
            $request = substr($request, 0, strlen($login));
            if (!Yii::app()->user->isGuest && $request == $login)
            {
            $url = Yii::app()->createUrl(Yii::app()->homeUrl[0]);
            Yii::app()->request->redirect($url);
        }
    }
}
