<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
$baseUrl = Yii::app()->theme->baseUrl; 
?>
<?php
if (Yii::app()->user->isSuperuser) {
    /* Custom functions used on dashboard for abound theme */
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
    require_once Yii::app()->basePath . '/../themes/abound/js/plugins/scripts.js.php';
    echo "  <div class='row-fluid'>
                <div class='span3 '>
                    <div class='stat-block'>
                        <ul>
                              <li class='stat-count'><span>".implode("",getMonthCust("updatefrom"))."</span><span>Monthly Sales. Ratio ".(implode("",getMonthCust("updatefrom"))-implode("",getMonthCust("updateto")))."</span></li>";
//                              if((implode("",getMonthCust("updatefrom"))-implode("",getMonthCust("updateto")))>0){
//                                  echo "<li class='stat-percent'><span class='text-success'>".number_format(((implode("",getMonthCust("updatefrom"))-implode("",getMonthCust("updateto")))*100/(implode("",getMonthCust("updatefrom")))),1)."%</span></li>";
//                              }  else {
//                                  echo "<li class='stat-percent'><span class='text-error'>".number_format(((implode("",getMonthCust("updatefrom"))-implode("",getMonthCust("updateto")))*100/(implode("",getMonthCust("updatefrom")))),1)."%</span></li>";
//                              }
    echo "              </ul>
                    </div>
                </div>
                <div class='span3 '>
                  <div class='stat-block'>
                        <ul>
                              <li class='stat-count'><span>".implode("",getYearCust("updatefrom"))."</span><span>Yearly Sales. Ratio ".(implode("",getYearCust("updatefrom"))-implode("",getYearCust("updateto")))."</span></li>";
                              if((implode("",getYearCust("updatefrom"))-implode("",getYearCust("updateto")))>0){
                                  echo "<li class='stat-percent'><span class='text-success'>".number_format(((implode("",getYearCust("updatefrom"))-implode("",getYearCust("updateto")))*100/implode("",getYearCust("updateto"))),1)."%</span></li>";
                              }  else {
                                  echo "<li class='stat-percent'><span class='text-error'>".number_format(((implode("",getYearCust("updatefrom"))-implode("",getYearCust("updateto")))*100/implode("",getYearCust("updateto"))),1)."%</span></li>";
                              }
    echo "              </ul>
                    </div>
                </div>
                <div class='span3 '>
                  <div class='stat-block'>
                    <ul>";
                        if(strlen(implode("",getMostUsers("descr")))>10){
                            echo "<li class='stat-count'><span style='font-size:12px;'>".substr((implode("",getMostUsers("descr"))), 0, 29)."...</span><span>Most User's Customer</span></li>";
                        } else {
                            echo "<li class='stat-count'><span>".substr((implode("",getMostUsers("descr"))), 0, 23)."...</span><span>Most User's Customer</span></li>";
                        }
                          $usernum = "SUBSTRING_INDEX(SUBSTRING_INDEX(dbserial, '-', 2), '-', -1)";
    echo "                <li class='stat-percent'><span class='text-success stat-percent'>".implode("",getMostUsers("$usernum"))."</span></li>
                    </ul>
                  </div>
                </div>
                <div class='span3 '>
                    <div class='stat-block'>
                        <ul>";
                            if(!empty(getLongestCust("descr"))){
                                if(strlen(implode("",getLongestCust("descr")))>10){
                                    echo "<li class='stat-count'><span style='font-size:12px;'>".substr((implode("",getLongestCust("descr"))), 0, 29)."...</span><span>Services from ".implode("",getLongestCust("updatefrom"))."</span></li>";
                                } else {
                                    echo "<li class='stat-count'><span>".substr((implode("",getLongestCust("descr"))), 0, 23)."...</span><span>Services from</span></li>";
                                }
                            }
                            $longestCust=array();
                            if(!empty(getLongestCust("updateto")) && !empty(getLongestCust("updatefrom"))){
                                $updateto = getLongestCust("updateto");
                                $updatefrom = getLongestCust("updatefrom");
                                $end_date = strtotime($updateto["updateto"]); 
                                $start_date = strtotime($updatefrom["updatefrom"]); 
                                $longestCust=($end_date-$start_date);
                            }
    echo "                  <li class='stat-percent'><span class='text-success stat-percent'>".floor($longestCust / (60*60*24*365) )."</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class='row-fluid'>
                <div class='span9'>";
            $this->beginWidget('zii.widgets.CPortlet', array(
                    'title'=>'<span class="icon-picture"></span>Operations Chart',
                    'titleCssClass'=>''
            ));
    echo "          <div>
                        <canvas id='canvas' height='275' width='1030'></canvas>
                    </div>";
            $this->endWidget();
    echo "      </div>
                <div class='span3'>
                    <div class='summary'>
                        <ul>
                            <li>
                                <span class='summary-icon'>
                                <img src='".$baseUrl ."/img/credit.png' width='36' height='36' alt='Monthly Income'>
                                </span>
                                <span class='summary-number'>".(implode("",getActiveCustomers())+implode("",getActiveContracts()))."</span>
                                <span class='summary-title'> Active Services</span>
                            </li>
                            <li>
                                <span class='summary-icon'>
                                        <img src='".$baseUrl ."/img/page_white_edit.png' width='36' height='36' alt='Open Invoices'>
                                </span>
                                <span class='summary-number'>".implode("",getActiveContracts())."</span>
                                <span class='summary-title'> Open Contracts</span>
                            </li>
                            <li>
                                <span class='summary-icon'>
                                        <img src='".$baseUrl ."/img/page_white_excel.png' width='36' height='36' alt='Open Quotes<'>
                                </span>
                                <span class='summary-number'>".implode("",getActiveCustomers())."</span>
                                <span class='summary-title'> Active Customers</span>
                            </li>
                            <li>
                                <span class='summary-icon'>
                                        <img src='".$baseUrl ."/img/group.png' width='36' height='36' alt='Active Members'>
                                </span>
                                <span class='summary-number'>".implode("",getTotalUsers())."</span>
                                <span class='summary-title'> Active Members</span>
                            </li>
                            <li>
                                <span class='summary-icon'>
                                        <img src='".$baseUrl ."/img/folder_page.png' width='36' height='36' alt='Recent Conversions'>
                                </span>
                                <span class='summary-number'>".implode("",getAllCustomers())."</span>
                                <span class='summary-title'> Total Customers</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class='row-fluid'>
                <div class='span6'>";
        $this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'<span class="icon-th-list"></span>Major customers with most users',
		));
        $dataProvider1=new CActiveDataProvider('AlmabCustomers', array(
            'criteria'=>array(
                'condition'=>'descr IS NOT NULL',
                'order'=>'cast(SUBSTRING_INDEX(SUBSTRING_INDEX(dbserial, "-", 2), "-", -1)AS UNSIGNED) DESC',
            ),
            'pagination'=>array(
                'pageSize'=>20,
            ),
        ));
	$this->widget('zii.widgets.grid.CGridView', array(
			/*'type'=>'striped bordered condensed',*/
                        'id'=>'megaloi pelates',
			'htmlOptions'=>array('class'=>'table table-striped table-bordered table-condensed'),
			'dataProvider'=>$dataProvider1,
			'template'=>"{items}",
			'columns'=>array(
				array(
                                    'name'  => 'id',
                                    'value' => 'CHtml::link($data->id,Yii::app()->createUrl("AlmabCustomers/view",array("id"=>$data->primaryKey)))',
                                    'type'  => 'raw',
                                ),
                                array(
                                    'name'=>'Customer Name',
                                    'value'=>'$data->descr',
                                ),
                                'email',
                                array(            // display 'create_time' using an expression
                                    'name'=>'Expire',
                                    'value'=>'date("M j, Y", strtotime($data->updateto))',
                                ),
                                array(            // display 'create_time' using an expression
                                    'name'=>'Version',
                                    'value'=>'substr($data->dbserial, 0, -20)',
                                ),
                       ),
		));
        $this->endWidget();
    echo "      </div>
                <div class='span6'>";
        $this->beginWidget('zii.widgets.CPortlet', array(
                      'title'=>'<span class="icon-th-list"></span>Expiring customer service',
              ));
	$dataProvider2=new CActiveDataProvider('AlmabCustomers', array(
            'criteria'=>array(
                'condition'=>'updateto>NOW()',
                'order'=>'updateto',
            ),
            'pagination'=>array(
                'pageSize'=>20,
            ),
        ));
        $this->widget('zii.widgets.grid.CGridView', array(
               /*'type'=>'striped bordered condensed',*/
               'htmlOptions'=>array('class'=>'table table-striped table-bordered table-condensed'),
               'dataProvider'=>$dataProvider2,
               'template'=>"{items}",
               'columns'=>array(
                       array(
                            'name'  => 'id',
                            'value' => 'CHtml::link($data->id,Yii::app()->createUrl("AlmabCustomers/view",array("id"=>$data->primaryKey)))',
                            'type'  => 'raw',
                        ),
                        array(
                           'name'=>'Customer Name',
                           'value'=>'$data->descr',
                       ),
                       'email',
                       array(            // display 'create_time' using an expression
                           'name'=>'Expire',
                           'value'=>'date("M j, Y", strtotime($data->updateto))',
                       ),
                       array(            // display 'create_time' using an expression
                           'name'=>'Version',
                           'value'=>'substr($data->dbserial, 0, -20)',
                       ),
               ),
        )); 
        $this->endWidget();
    echo "      </div>
            </div>
            <div class='row-fluid'>
                <div class='span6'>";
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'<span class="icon-th-large"></span>Product Sales',
			'titleCssClass'=>''
		));
    echo "          <div id='canvas-holder'>
                        <canvas id='chart-area1' width='500' height='500'/>
                    </div>";
        $this->endWidget();
    echo "      </div>
                <div class='span6'>";
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'<span class="icon-th-list"></span>Active Product Sales',
			'titleCssClass'=>''
		));
    echo "          <div id='canvas-holder'>
                        <canvas id='chart-area2' width='500' height='500'/>
                    </div>";
        $this->endWidget();
} else {
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
    echo "  <div class='row-fluid'>";
    if(!empty(getExpirationInfo("descr"))){
    echo "      <div class='span4 '>
                    <div class='stat-block'>
                        <ul>
                              <li class='stat-count'><span>".implode("",getExpirationInfo("descr"))."</span><span>Services Expiration date</span></li>";
                              if((implode("",getExpirationInfo("updateto")) > (new \DateTime())->format('Y-m-d'))){
                                  echo "<li class='stat-percent'><span class='text-success'>".implode("",getExpirationInfo("updateto"))."</span></li>";
                              }  else {
                                  echo "<li class='stat-percent'><span class='text-error'>".implode("",getExpirationInfo("updateto"))."</span></li>";
                              }
    echo "              </ul>
                    </div>
                </div>";
    } else {
    echo "      <div class='span4 '>
                    <div class='stat-block'>
                        <ul>
                            <li class='stat-count'><span>".Yii::app()->user->name."</span><span>User does not exist in Customers</span></li>
                        </ul>
                    </div>
                </div>";
    }
    if(!empty(getUpdateVersion("max(version)"))){
    echo "      <div class='span4 '>
                    <div class='stat-block'>
                        <ul>
                            <li class='stat-count'><a href='".implode("",getUpdateVersion("max(file_path)"))."' target='_blank'><span>".implode("",getUpdateVersion("max(version)"))."</span></a><span>User Update Version</span></li>";
                          if((implode("",getExpirationInfo("updateto")) > (new \DateTime())->format('Y-m-d'))){
                              echo "<li class='stat-percent'><span class='text-success'>".implode("",getUpdateVersion("max(upddate)"))."</span></li>";
                          }  else {
                              echo "<li class='stat-percent'><span class='text-error'>".implode("",getUpdateVersion("max(upddate)"))."</span></li>";
                          }
    echo "              </ul>
                    </div>
                </div>";
    } else {
    echo "      <div class='span4 '>
                    <div class='stat-block'>
                        <ul>
                            <li class='stat-count'><span>".Yii::app()->user->name."</span><span>Unknown Update Version</span></li>
                        </ul>
                    </div>
                </div>";
    }
    if(!empty(getInstalledVersion("max(au.version)"))){
    echo "      <div class='span4 '>
                    <div class='stat-block'>
                        <ul>
                            <li class='stat-count'><span>".implode("",getInstalledVersion("max(au.version)"))."</span><span>User Installed Version</span></li>";
                          if((implode("",getExpirationInfo("updateto")) > (new \DateTime())->format('Y-m-d'))){
                              echo "<li class='stat-percent'><span class='text-success'>".implode("",getInstalledVersion("max(condate)"))."</span></li>";
                          }  else {
                              echo "<li class='stat-percent'><span class='text-error'>".implode("",getInstalledVersion("max(condate)"))."</span></li>";
                          }
    echo "              </ul>
                    </div>
                </div>";
    } else {
    echo "      <div class='span4 '>
                    <div class='stat-block'>
                        <ul>
                            <li class='stat-count'><span>".Yii::app()->user->name."</span><span>No info about Installed Version</span></li>
                        </ul>
                    </div>
                </div>";
    }
    echo "  </div>";
    echo "  <div class='row-fluid'>";
    echo "      <div class='span8 '>";
        $this->beginWidget('zii.widgets.CPortlet', array(
                      'title'=>'<span class="icon-th-list"></span>Support system',
              ));
    echo "      <h2>Welcome to Support system</h2>
                <p>Use the support system to show informations about your product services.</p>
                <ul>
                    <li>Show your service status</li>
                    <li>Show the Update version for your program. Click above the version to downloaded it.</li>
                    <li>Check the installed Update version at your systems</li>
                    <li>Show the full installation software version. Click above the version to downloaded it.</li>
                    <li>If you have a custom program Version you can view all needed files and download it</li>
                    <li>If you need support or help about software, see the <strong>Support Section</strong></li>
                    <li>At <strong>Files Section</strong> you will find useful files about your product installation</li>
                    <li>Check the video about product installation</li>
                    <li>Contact us via contact form for further support</li>
                </ul>
                <p>(*)Red Color seems that your customer services have been expired. Green Color seems that your customer services are active.</p>
         "; 
        $this->endWidget();
    echo "      </div>";
    if(!empty(getExpirationInfo("updateto"))){
    echo "      <div class='span4 '>
                    <div class='stat-block'>
                        <ul>
                            <li class='stat-count'><a href='".implode("",getSoftwareVersion("max(file_path)"))."' target='_blank'><span>".implode("",getSoftwareVersion("max(filename)"))."</span></a><span>Software Version</span></li>";
                          if((implode("",getExpirationInfo("updateto")) > (new \DateTime())->format('Y-m-d'))){
                              echo "<li class='stat-percent'><span class='text-success'>".implode("",getSoftwareVersion("max(create_date)"))."</span></li>";
                          }  else {
                              echo "<li class='stat-percent'><span class='text-error'>".implode("",getSoftwareVersion("max(create_date)"))."</span></li>";
                          }
    echo "              </ul>
                    </div>
                </div>";
    } else {
    echo "      <div class='span4 '>
                    <div class='stat-block'>
                        <ul>
                            <li class='stat-count'><span>".Yii::app()->user->name."</span><span>No info about Installed Version</span></li>
                        </ul>
                    </div>
                </div>";
    }
    echo "  <div class='row-fluid'>";
    echo "      <div class='span6 '>";
    $this->beginWidget('zii.widgets.CPortlet', array(
                      'title'=>'<span class="icon-th-list"></span>Alma Client Setup',
              ));
    echo "          <div align='center' class='embed-responsive embed-responsive-16by9'>
                        <video controls loop class='embed-responsive-item' width='100%'>
                            <source src='http://www.nbalma.gr/files/Alma-Client-Setup.mp4' type='video/mp4'>
                        </video>
                    </div>";
    $this->endWidget();
    echo "      </div>";
    echo "      <div class='span6 '>";
    $this->beginWidget('zii.widgets.CPortlet', array(
                      'title'=>'<span class="icon-th-list"></span>Alma Full Setup',
              ));
    echo "          <div align='center' class='embed-responsive embed-responsive-16by9'>
                        <video controls loop class='embed-responsive-item' width='100%'>
                            <source  src='http://www.nbalma.gr/files/Alma-Full_Setup.mp4' type='video/mp4'>
                        </video>
                    </div>";
    $this->endWidget();
    echo "      </div>";
    
    echo "  </div>
        </div>";
}
?>