<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
$baseUrl = Yii::app()->theme->baseUrl; 
?>
<?php
if (Yii::app()->user->isSuperuser) {
    require_once Yii::app()->basePath . '/../themes/abound/views/site/column2Functions.php';
    require_once Yii::app()->basePath . '/../themes/abound/views/site/dashboardFunctions.php';
    echo "  <div class='row-fluid'>
                <div class='span3 '>
                    <div class='stat-block'>
                        <ul>
                              <li class='stat-count'><span>".implode("",getMonthCust("updatefrom"))."</span><span>Monthly Sales. Ratio ".(implode("",getMonthCust("updatefrom"))-implode("",getMonthCust("updateto")))."</span></li>";
                              if((implode("",getMonthCust("updatefrom"))-implode("",getMonthCust("updateto")))>0){
                                  echo "<li class='stat-percent'><span class='text-success'>".number_format(((implode("",getMonthCust("updatefrom"))-implode("",getMonthCust("updateto")))*100/(implode("",getMonthCust("updatefrom")))),1)."%</span></li>";
                              }  else {
                                  echo "<li class='stat-percent'><span class='text-error'>".number_format(((implode("",getMonthCust("updatefrom"))-implode("",getMonthCust("updateto")))*100/(implode("",getMonthCust("updatefrom")))),1)."%</span></li>";
                              }
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
                            if(strlen(implode("",getLongestCust("descr")))>10){
                                echo "<li class='stat-count'><span style='font-size:12px;'>".substr((implode("",getLongestCust("descr"))), 0, 29)."...</span><span>Services from ".implode("",getLongestCust("updatefrom"))."</span></li>";
                            } else {
                                echo "<li class='stat-count'><span>".substr((implode("",getLongestCust("descr"))), 0, 23)."...</span><span>Services from</span></li>";
                            }
    echo "                  <li class='stat-percent'><span class='text-success stat-percent'>".((implode("",getLongestCust("updateto")))-(implode("",getLongestCust("updatefrom"))))."</span></li>
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
    require_once Yii::app()->basePath . '/../themes/abound/views/site/dashboard2Functions.php';
    //print_r($username);
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
    
    echo "  </div>
        </div>";
}
?>
        