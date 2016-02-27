<?php
/* Custom functions used on dashboard for abound theme */
    //Contracts
    function getActiveContracts(){
       $ActiveContracts = Yii::app()->db->createCommand()
            ->select(array('count(*)'))
            ->from('almab_contracts')
            ->where('ContractEndDate > NOW()')
            ->queryRow();
    return $ActiveContracts;
    }
    //The last customer
    function getNewbie($f){
       $Newbie = Yii::app()->db->createCommand()
            ->select($f)
            ->from('almab_customers')
            ->order('id DESC')
            ->limit('1')
            ->queryRow();
    return $Newbie;
    }
    //New customers per month
    function getMonthCust($updmonth){
       $MonthCust = Yii::app()->db->createCommand()
            ->select('count(*)')
            ->from('almab_customers')
            ->where($updmonth.' BETWEEN DATE_FORMAT(CURRENT_DATE - INTERVAL 1 MONTH, "%Y-%m-01") AND LAST_DAY(CURRENT_DATE - INTERVAL 1 MONTH)')
            ->queryRow();
    return $MonthCust;
    }
    //New customers per year
    function getYearCust($updyear){
       $YearCust = Yii::app()->db->createCommand()
            ->select('count(*)')
            ->from('almab_customers')
            ->where($updyear.' BETWEEN DATE_SUB(NOW(), INTERVAL 365 DAY) AND NOW()')
            ->queryRow();
    return $YearCust;
    }
    //Expiring services in current 30 days
    function getExpCust($expdate){
       $ExpCust = Yii::app()->db->createCommand()
            ->select('count(*)')
            ->from('almab_customers')
            ->where($expdate.' BETWEEN NOW() AND DATE_ADD(NOW(), INTERVAL 30 DAY)')
            ->queryRow();
    return $ExpCust;
    }
    //Most users customers
    function getMostUsers($MostUsers){
       $MostUsers = Yii::app()->db->createCommand()
            ->select($MostUsers)
            ->from('almab_customers')
            ->where('(SUBSTRING_INDEX(SUBSTRING_INDEX(dbserial, "-", 2), "-", -1)) = (select MAX(CAST(SUBSTRING_INDEX(SUBSTRING_INDEX(dbserial, "-", 2), "-", -1)AS UNSIGNED)) FROM `almab_customers`)')
            ->queryRow();
    return $MostUsers;
    }
    //Longest time of services customer
    function getLongestCust($TheLongest){
       $LongestCust = Yii::app()->db->createCommand()
            ->select($TheLongest)
            ->from('almab_customers')
            ->where('updateto > NOW() AND (updateto - updatefrom = (Select max(updateto - updatefrom) from `almab_customers`))')
            ->queryRow();
    return $LongestCust;
    }
    function getResultLabels(){
       $LongestCust = Yii::app()->db->createCommand()
            ->select('distinct SUBSTRING_INDEX(dbserial, "-", 1) as Alma')
            ->from('almab_customers')
            ->queryRow();
    return $LongestCust;
    }

/* Doughnut DataSet */        
$data1 = array();
$sql1 = "SELECT CONCAT('Alma ',SUBSTRING_INDEX(dbserial, '-', 1)) as label, COUNT(SUBSTRING_INDEX(dbserial, '-', 1)) as value FROM `almab_customers`WHERE SUBSTRING_INDEX(dbserial, '-', 1) IS NOT null GROUP BY SUBSTRING_INDEX(dbserial, '-', 1)";
$dbCommand1 = Yii::app()->db->createCommand($sql1);
$data1 = $dbCommand1->queryAll();

$json1 = json_encode($data1);

/* Pie DataSet */        
$data2 = array();
$sql2 = "SELECT CONCAT('Alma ',SUBSTRING_INDEX(dbserial, '-', 1)) as label, COUNT(SUBSTRING_INDEX(dbserial, '-', 1)) as value FROM `almab_customers`WHERE SUBSTRING_INDEX(dbserial, '-', 1) IS NOT null AND updateto > NOW() GROUP BY SUBSTRING_INDEX(dbserial, '-', 1)";
$dbCommand2 = Yii::app()->db->createCommand($sql2);
$data2 = $dbCommand2->queryAll();

$json2 = json_encode($data2);

/* Line DataSet */
$begin = new DateTime("2006-07-30");
$end = new DateTime(date("Y-m-d"));

$daterange = new DatePeriod($begin, new DateInterval('P1D'), $end);
$data3 = array();
$data3 = array();
$label = array();
foreach($daterange as $obj){
    $date = $obj->format("Y-m-d");
    $label[] = $date;
    $data3[] = implode("",(Yii::app()->db->createCommand("SELECT COUNT(*) as data FROM almab_customers WHERE updatefrom <= :date AND updateto >= :date")->bindValue('date',$date)->queryRow()));
    $data4[] = implode("",(Yii::app()->db->createCommand("SELECT COUNT(*) as data FROM almab_customers WHERE updateto <= :date")->bindValue('date',$date)->queryRow()));
}