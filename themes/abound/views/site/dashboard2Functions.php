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
    function getUpdateVersion($r){
       $updateto = implode("",getExpirationInfo("updateto"));
       $UpdateVersion = Yii::app()->db->createCommand()
            ->select($r)
            ->from('almab_updates')
            ->where('upddate < :updateto')
            ->bindValue(':updateto',$updateto)
            ->queryRow();
    return $UpdateVersion;
    }
    //User Installed Version
    function getInstalledVersion($t){
       $username = Yii::app()->user->name;
       $InstalledVersion = Yii::app()->db->createCommand()
            ->select($t)
            ->from('almab_customerupdate cup')
            ->join('almab_customers ac', 'ac.id=cup.customerid')
            ->join('almab_updates au', 'au.id=cup.updateid')
            ->where('cup.customerid=:username')
            ->bindValue(':username',$username)
            ->queryRow();
    return $InstalledVersion;
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