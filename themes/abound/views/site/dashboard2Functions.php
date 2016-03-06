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
       if(!empty(getExpirationInfo("updateto"))){
           $updateto = implode("",getExpirationInfo("updateto"));
           $UpdateVersion = Yii::app()->db->createCommand()
                 ->select($r)
                 ->from('almab_updates')
                 ->where('upddate < :updateto')
                 ->bindValue(':updateto',$updateto)
                 ->queryRow();
            return $UpdateVersion;
        }
    }
    //User Installed Version
    function getInstalledVersion($t){
       if(!empty(getExpirationInfo("updateto"))){
            $username = Yii::app()->user->name;
            $record=AlmabCustomerupdate::model()->find(array(
                'select'=>'customerid',
                'condition'=>'customerid=:customerid',
                'params'=>array(':customerid'=>$username))
              );
            if($record === null){
                return;
            } else {
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
       }   
    }
    //User Software version
    function getSoftwareVersion($w){
        if(!empty(getExpirationInfo("updateto"))){
            $username = Yii::app()->user->name;
            $updateto = implode("",getExpirationInfo("updateto"));
            $SoftwareVersion = Yii::app()->db->createCommand()
                 ->select($w)
                 ->from('files')
                 ->where('create_date < :updateto AND file_category_id=1 AND file_support_id = 1')
                 ->bindValue(':updateto',$updateto)
                 ->queryRow();
            return $SoftwareVersion;
        }
    }