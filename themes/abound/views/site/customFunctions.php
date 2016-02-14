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