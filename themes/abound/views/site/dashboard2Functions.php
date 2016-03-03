<?php
/* Custom functions used on dashboard for abound theme */
//Username
//$userId = implode("",(Yii::app()->user->getId()));
$username = implode("",(Yii::app()->db->createCommand("SELECT username FROM users WHERE id = ".(Yii::app()->user->getId())."")->queryAll()));

    //User Expiration Info
    function getExpirationInfo($f){
       $ExpirationInfo = Yii::app()->db->createCommand()
            ->select($f)
            ->from('almab_customers ac')
            ->join('users u', 'u.username=ac.id')
            ->where('u.username = $username')
            ->queryRow();
    return $ExpirationInfo;
    }