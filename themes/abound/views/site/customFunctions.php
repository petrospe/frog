<?php
/* Custom functions used on column2 layout and dashboard for abound theme */
    /* Bandwith Usage Server speed*/
        $link = 'http://cachefly.cachefly.net/1mb.test';
        $ch = curl_init($link);
        $start = time();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, TRUE);
        curl_setopt($ch, CURLOPT_NOBODY, TRUE);
        $data = curl_exec($ch);
        $size = curl_getinfo($ch, CURLINFO_CONTENT_LENGTH_DOWNLOAD);
        curl_close($ch);
        $file = file_get_contents($link);
        $end = time();
        $time = $end - $start;
        $size = $size / 1048576;
        $speed = $size / $time; // MB/s, 4MB/s is the 100%
    /* Server free space */
        $df = disk_free_space("/"); //bytes
        $ds = disk_total_space("/");
        //$freegb = $df / 1073741824;
    /* Memory Usage */
        function convert($size)
            {
                $unit=array('b','kb','mb','gb','tb','pb');
                return @round($size/pow(1024,($i=floor(log($size,1024)))),2).' '.$unit[$i];
            }
        $memuse = convert(memory_get_usage(true));
    /* CPU Usage */
        function get_server_cpu_usage(){
                $load = sys_getloadavg();
                return $load[0];
            }
    //All Customers
    function getAllCustomers(){
       $AllCustomers = Yii::app()->db->createCommand()
            ->select(array('count(*)'))
            ->from('almab_customers')
            ->queryRow();
    return $AllCustomers;
    }
    //Active Customers
    function getActiveCustomers(){
       $ActiveCustomers = Yii::app()->db->createCommand()
            ->select(array('count(*)'))
            ->from('almab_customers')
            ->where('updateto > NOW()')
            ->queryRow();
    return $ActiveCustomers;
    }
    //Inactive Customers
    function getInactiveCustomers(){
       $InactiveCustomers = Yii::app()->db->createCommand()
            ->select(array('count(*)'))
            ->from('almab_customers')
            ->where('updateto < NOW()')
            ->queryRow();
    return $InactiveCustomers;
    }
    //Users
    function getTotalUsers(){
       $TotalUsers = Yii::app()->db->createCommand()
            ->select(array('sum(SUBSTRING_INDEX(SUBSTRING_INDEX(dbserial, "-", 2), "-", -1))'))
            ->from('almab_customers')
            ->where('descr IS NOT NULL')
            ->queryRow();
    return $TotalUsers;
    }
    //Contracts
    function getActiveContracts(){
       $ActiveContracts = Yii::app()->db->createCommand()
            ->select(array('count(*)'))
            ->from('almab_contracts')
            ->where('ContractEndDate > NOW()')
            ->queryRow();
    return $ActiveContracts;
    }
    function getNewbie($f){
       $Newbie = Yii::app()->db->createCommand()
            ->select($f)
            ->from('almab_customers')
            ->order('id DESC')
            ->limit('1')
            ->queryRow();
    return $Newbie;
    }
    function getMonthCust($updmonth){
       $MonthCust = Yii::app()->db->createCommand()
            ->select('count(*)')
            ->from('almab_customers')
            ->where($updmonth.' BETWEEN DATE_FORMAT(CURRENT_DATE - INTERVAL 1 MONTH, "%Y-%m-01") AND LAST_DAY(CURRENT_DATE - INTERVAL 1 MONTH)')
            ->queryRow();
    return $MonthCust;
    }
    function getYearCust($updyear){
       $YearCust = Yii::app()->db->createCommand()
            ->select('count(*)')
            ->from('almab_customers')
            ->where($updyear.' BETWEEN DATE_SUB(NOW(), INTERVAL 365 DAY) AND NOW()')
            ->queryRow();
    return $YearCust;
    }
    function getExpCust($expdate){
       $ExpCust = Yii::app()->db->createCommand()
            ->select('count(*)')
            ->from('almab_customers')
            ->where($expdate.' BETWEEN NOW() AND DATE_ADD(NOW(), INTERVAL 30 DAY)')
            ->queryRow();
    return $ExpCust;
    }
    function getMostUsers($MostUsers){
       $MostUsers = Yii::app()->db->createCommand()
            ->select($MostUsers)
            ->from('almab_customers')
            ->where('(SUBSTRING_INDEX(SUBSTRING_INDEX(dbserial, "-", 2), "-", -1)) = (select MAX(CAST(SUBSTRING_INDEX(SUBSTRING_INDEX(dbserial, "-", 2), "-", -1)AS UNSIGNED)) FROM `almab_customers`)')
            ->queryRow();
    return $MostUsers;
    }
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
//$sqlMinDate = "SELECT min(updatefrom) FROM almab_customers WHERE updatefrom != 0";
//$runSqlMinDate = Yii::app()->db->createCommand($sqlMinDate);
//$resSqlMinDate = $runSqlMinDate ->queryAll();
//$asResSqlMinDate = implode("",$resSqlMinDate[0]);
//
//$sqlMaxDate = "SELECT max(updateto) FROM almab_customers WHERE updateto != 0";
//$runSqlMaxDate = Yii::app()->db->createCommand($sqlMaxDate);
//$resSqlMaxDate = $runSqlMaxDate->queryAll();
//$asResSqlMaxDate = implode("",$resSqlMaxDate[0]);
//
//$begin = new DateTime($asResSqlMinDate);
//$end = new DateTime($asResSqlMaxDate);
//
//$daterange = new DatePeriod($begin, new DateInterval('P1D'), $end);
//$dates = array();
//foreach($daterange as $key=>$date){
//    $dates[$key]=$date->format("Y-m-d").",";
//}
//
//    $data3 = array();
//    $sql3 = "SELECT COUNT(*) as data FROM almab_customers WHERE updatefrom IN (".array($dates).") AND updateto IN (".array($dates).")";
//    $dbCommand3 = Yii::app()->db->createCommand($sql3);
//    $data3 = $dbCommand3->queryAll();
//
//    $json3 = json_encode($data3);


