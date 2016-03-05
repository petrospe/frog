<?php
/* Custom functions used on dashboard for abound theme */
    //User Expiration Info
    function getExpirationInfo($f){
       $username = Yii::app()->user->name;
       $ExpirationInfo = Yii::app()->db->createCommand()
            ->select($f)
            ->from('almab_customers ac')
            ->join('users u', 'ac.id=u.username')
            ->where('u.username=:username')
            ->bindValue(':username',$username)
            ->queryRow();
    return $ExpirationInfo;
    }
    //User Update Version
    function getUpdateVersion($f){
       $updateto = implode("",getExpirationInfo("updateto"));
       $UpdateVersion = Yii::app()->db->createCommand()
            ->select($f)
            ->from('almab_updates')
            ->where(':updateto < upddate')
            ->bindValue(':updateto',$updateto)
            ->queryRow();
    return $UpdateVersion;
    }
    //User Installed Version
    function getInstalledVersion(){
       $username = Yii::app()->user->name;
       $ExpirationInfo = Yii::app()->db->createCommand()
            ->select('version')
            ->from('almab_updates au')
            ->join('users u', 'ac.id=u.username')
            ->where('u.username=:username')
            ->bindValue(':username',$username)
            ->queryRow();
    return $ExpirationInfo;
    }
    //User Software version
    function getSoftwareVersion($f){
       $username = Yii::app()->user->name;
       $ExpirationInfo = Yii::app()->db->createCommand()
            ->select($f)
            ->from('almab_customers ac')
            ->join('users u', 'ac.id=u.username')
            ->where('u.username=:username')
            ->bindValue(':username',$username)
            ->queryRow();
    return $ExpirationInfo;
    }