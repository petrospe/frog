<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
$baseUrl = Yii::app()->theme->baseUrl; 
?>
<?php
if (Yii::app()->user->isSuperuser) {
    require_once Yii::app()->basePath . '/../themes/abound/views/site/column2Functions.php';
    require_once Yii::app()->basePath . '/../themes/abound/views/site/dashboardFunctions.php';
    echo "<div class='row-fluid'>
            <div class='span3 '>
                  <div class='stat-block'>
                    <ul>
                          <li class='stat-count'><span>".implode("",getMonthCust("updatefrom"))."</span><span>Monthly Sales. Ratio ".(implode("",getMonthCust("updatefrom"))-implode("",getMonthCust("updateto")))."</span></li>";
                          if((implode("",getMonthCust("updatefrom"))-implode("",getMonthCust("updateto")))>0){
                              echo "<li class='stat-percent'><span class='text-success'>".number_format(((implode("",getMonthCust("updatefrom"))-implode("",getMonthCust("updateto")))*100/(implode("",getMonthCust("updatefrom")))),1)."%</span></li>";
                          }  else {
                              echo "<li class='stat-percent'><span class='text-error'>".number_format(((implode("",getMonthCust("updatefrom"))-implode("",getMonthCust("updateto")))*100/(implode("",getMonthCust("updatefrom")))),1)."%</span></li>";
                          }
    echo "          </ul>
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
    echo "          </ul>
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
    echo "                <li class='stat-percent'><span class='text-success stat-percent'>".((implode("",getLongestCust("updateto")))-(implode("",getLongestCust("updatefrom"))))."</span></li>
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
            
            echo 
                "<div>
			<canvas id='canvas' height='275' width='1030'></canvas>
		</div>";

            $this->endWidget();
            
            echo "
            </div>
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
                    <span class='summary-title'> Total Customers</span></li>

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
          echo "</div><!--/span-->
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
	echo "</div><!--/span-->
</div><!--/row-->

<div class='row-fluid'>
	<div class='span6'>";

		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'<span class="icon-th-large"></span>Product Sales',
			'titleCssClass'=>''
		));

        echo "
                <div id='canvas-holder'>
			<canvas id='chart-area1' width='500' height='500'/>
		</div>
            ";
        
        $this->endWidget();
	echo "</div><!--/span-->
    <div class='span6'>";

		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'<span class="icon-th-list"></span>Active Product Sales',
			'titleCssClass'=>''
		));

        echo "
                <div id='canvas-holder'>
			<canvas id='chart-area2' width='500' height='500'/>
		</div>
        ";
        $this->endWidget();
    
} else {
    require_once Yii::app()->basePath . '/../themes/abound/views/site/dashboard2Functions.php';
    //print_r($username);
     echo "<div class='row-fluid'>
            <div class='span4 '>
                  <div class='stat-block'>
                    <ul>
                          <li class='stat-count'><span>".implode("",getExpirationInfo("descr"))."</span><span>Services Expiration date</span></li>";
                          if((implode("",getExpirationInfo("updateto")) > (new \DateTime())->format('Y-m-d'))){
                              echo "<li class='stat-percent'><span class='text-success'>".implode("",getExpirationInfo("updateto"))."</span></li>";
                          }  else {
                              echo "<li class='stat-percent'><span class='text-error'>".implode("",getExpirationInfo("updateto"))."</span></li>";
                          }
    echo "          </ul>
                  </div>
            </div>";
//    echo "<div class='span4 '>
//                  <div class='stat-block'>
//                    <ul>
//                          <li class='stat-count'><span>".implode("",getUpdateVersion("version"))."</span><span>User Update Version</span></li>";
//                          if((implode("",getUpdateVersion("updateto")) > (new \DateTime())->format('Y-m-d'))){
//                              echo "<li class='stat-percent'><span class='text-success'>".implode("",getUpdateVersion("updateto"))."</span></li>";
//                          }  else {
//                              echo "<li class='stat-percent'><span class='text-error'>".implode("",getUpdateVersion("updateto"))."</span></li>";
//                          }
//    echo "          </ul>
//                  </div>
//            </div>";
    
    echo "
        </div>
        ";
}
?>
        