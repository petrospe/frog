<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
$baseUrl = Yii::app()->theme->baseUrl; 
?>
<?php
if (Yii::app()->user->isSuperuser) {
    require_once Yii::app()->basePath . '/../themes/abound/views/site/customFunctions.php';
    
        $gridDataProvider = new CArrayDataProvider(array(
        array('id'=>1, 'firstName'=>'Mark', 'lastName'=>'Otto', 'language'=>'CSS','usage'=>'<span class="inlinebar">1,3,4,5,3,5</span>'),
        array('id'=>2, 'firstName'=>'Jacob', 'lastName'=>'Thornton', 'language'=>'JavaScript','usage'=>'<span class="inlinebar">1,3,16,5,12,5</span>'),
        array('id'=>3, 'firstName'=>'Stu', 'lastName'=>'Dent', 'language'=>'HTML','usage'=>'<span class="inlinebar">1,4,4,7,5,9,10</span>'),
            array('id'=>4, 'firstName'=>'Jacob', 'lastName'=>'Thornton', 'language'=>'JavaScript','usage'=>'<span class="inlinebar">1,3,16,5,12,5</span>'),
        array('id'=>5, 'firstName'=>'Stu', 'lastName'=>'Dent', 'language'=>'HTML','usage'=>'<span class="inlinebar">1,3,4,5,3,5</span>'),
    ));

    echo "<div class='row-fluid'>
            <div class='span3 '>
                  <div class='stat-block'>
                    <ul>
                          <li class='stat-graph inlinebar' id='weekly-visit'></li>
                          <li class='stat-count'><span>".implode("",getMonthCust("updatefrom"))."</span><span>Monthly Sales. Ratio ".(implode("",getMonthCust("updatefrom"))-implode("",getMonthCust("updateto")))."</span></li>";
                          if((implode("",getMonthCust("updatefrom"))-implode("",getMonthCust("updateto")))>0){
                              echo "<li class='stat-percent'><span class='text-success stat-percent'>".number_format(((implode("",getMonthCust("updatefrom"))-implode("",getMonthCust("updateto")))*100/(implode("",getMonthCust("updatefrom")))),1)."%</span></li>";
                          }  else {
                              echo "<li class='stat-percent'><span class='text-error stat-percent'>".number_format(((implode("",getMonthCust("updatefrom"))-implode("",getMonthCust("updateto")))*100/(implode("",getMonthCust("updatefrom")))),1)."%</span></li>";
                          }
    echo "          </ul>
                  </div>
            </div>
            <div class='span3 '>
                  <div class='stat-block'>
                    <ul>
                          <li class='stat-graph inlinebar' id='new-visits'></li>
                          <li class='stat-count'><span>".implode("",getYearCust("updatefrom"))."</span><span>Yearly Sales. Ratio ".(implode("",getYearCust("updatefrom"))-implode("",getYearCust("updateto")))."</span></li>";
                          if((implode("",getYearCust("updatefrom"))-implode("",getYearCust("updateto")))>0){
                              echo "<li class='stat-percent'><span class='text-success stat-percent'>".number_format(((implode("",getYearCust("updatefrom"))-implode("",getYearCust("updateto")))*100/implode("",getYearCust("updateto"))),1)."%</span></li>";
                          }  else {
                              echo "<li class='stat-percent'><span class='text-error stat-percent'>".number_format(((implode("",getYearCust("updatefrom"))-implode("",getYearCust("updateto")))*100/implode("",getYearCust("updateto"))),1)."%</span></li>";
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
                            echo "<li class='stat-count'><span style='font-size:12px;'>".substr((implode("",getLongestCust("descr"))), 0, 29)."...</span><span>Long time service from ".implode("",getLongestCust("updatefrom"))."</span></li>";
                        } else {
                            echo "<li class='stat-count'><span>".substr((implode("",getLongestCust("descr"))), 0, 23)."...</span><span>Long time service</span></li>";
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
            
            echo "<div class='auto-update-chart' style='height: 250px;width:100%;margin-top:15px; margin-bottom:15px;'></div>";
            

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
	  $this->widget('zii.widgets.grid.CGridView', array(
			/*'type'=>'striped bordered condensed',*/
			'htmlOptions'=>array('class'=>'table table-striped table-bordered table-condensed'),
			'dataProvider'=>$gridDataProvider,
			'template'=>"{items}",
			'columns'=>array(
				array('name'=>'id', 'header'=>'#'),
				array('name'=>'firstName', 'header'=>'First name'),
				array('name'=>'lastName', 'header'=>'Last name'),
				array('name'=>'language', 'header'=>'Language'),
				array('name'=>'usage', 'header'=>'Usage', 'type'=>'raw'),
				
			),
		));
          echo "</div><!--/span-->
	<div class='span6'>";
	
		 $this->widget('zii.widgets.grid.CGridView', array(
			/*'type'=>'striped bordered condensed',*/
			'htmlOptions'=>array('class'=>'table table-striped table-bordered table-condensed'),
			'dataProvider'=>$gridDataProvider,
			'template'=>"{items}",
			'columns'=>array(
				array('name'=>'id', 'header'=>'#'),
				array('name'=>'firstName', 'header'=>'First name'),
				array('name'=>'lastName', 'header'=>'Last name'),
				array('name'=>'language', 'header'=>'Language'),
				array('name'=>'usage', 'header'=>'Usage', 'type'=>'raw'),
				
			),
		)); 
        	
	echo "</div><!--/span-->
</div><!--/row-->

<div class='row-fluid'>
	<div class='span6'>";

		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'<span class="icon-th-large"></span>Income Chart',
			'titleCssClass'=>''
		));

        echo "
        <div class='visitors-chart' style='height: 230px;width:100%;margin-top:15px; margin-bottom:15px;'></div>
            ";
        
        $this->endWidget();
	echo "</div><!--/span-->
    <div class='span6'>";

		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'<span class="icon-th-list"></span> Visitors Chart',
			'titleCssClass'=>''
		));

        echo "
        <div class='pieStats' style='height: 230px;width:100%;margin-top:15px; margin-bottom:15px;'></div>
        ";
        $this->endWidget();
        echo "</div>
	<!--<div class='span2'>
    	<input class='knob' data-width='100' data-displayInput=false data-fgColor='#5EB95E' value='35'>
    </div>
	<div class='span2'>
     	<input class='knob' data-width='100' data-cursor=true data-fgColor='#B94A48' data-thickness=.3 value='29'>
    </div>
	<div class='span2'>
         <input class='knob' data-width='100' data-min='-100' data-fgColor='#F89406' data-displayPrevious=true value='44'>     	
	</div><!--/span-->
</div><!--/row-->";
    
} else {
    echo 'Customer Page';
}
?>

          


<script>
            $(function() {

                $(".knob").knob({
                    /*change : function (value) {
                        //console.log("change : " + value);
                    },
                    release : function (value) {
                        console.log("release : " + value);
                    },
                    cancel : function () {
                        console.log("cancel : " + this.value);
                    },*/
                    draw : function () {

                        // "tron" case
                        if(this.$.data('skin') == 'tron') {

                            var a = this.angle(this.cv)  // Angle
                                , sa = this.startAngle          // Previous start angle
                                , sat = this.startAngle         // Start angle
                                , ea                            // Previous end angle
                                , eat = sat + a                 // End angle
                                , r = 1;

                            this.g.lineWidth = this.lineWidth;

                            this.o.cursor
                                && (sat = eat - 0.3)
                                && (eat = eat + 0.3);

                            if (this.o.displayPrevious) {
                                ea = this.startAngle + this.angle(this.v);
                                this.o.cursor
                                    && (sa = ea - 0.3)
                                    && (ea = ea + 0.3);
                                this.g.beginPath();
                                this.g.strokeStyle = this.pColor;
                                this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false);
                                this.g.stroke();
                            }

                            this.g.beginPath();
                            this.g.strokeStyle = r ? this.o.fgColor : this.fgColor ;
                            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
                            this.g.stroke();

                            this.g.lineWidth = 2;
                            this.g.beginPath();
                            this.g.strokeStyle = this.o.fgColor;
                            this.g.arc( this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
                            this.g.stroke();

                            return false;
                        }
                    }
                });

                // Example of infinite knob, iPod click wheel
                var v, up=0,down=0,i=0
                    ,$idir = $("div.idir")
                    ,$ival = $("div.ival")
                    ,incr = function() { i++; $idir.show().html("+").fadeOut(); $ival.html(i); }
                    ,decr = function() { i--; $idir.show().html("-").fadeOut(); $ival.html(i); };
                $("input.infinite").knob(
                                    {
                                    min : 0
                                    , max : 20
                                    , stopper : false
                                    , change : function () {
                                                    if(v > this.cv){
                                                        if(up){
                                                            decr();
                                                            up=0;
                                                        }else{up=1;down=0;}
                                                    } else {
                                                        if(v < this.cv){
                                                            if(down){
                                                                incr();
                                                                down=0;
                                                            }else{down=1;up=0;}
                                                        }
                                                    }
                                                    v = this.cv;
                                                }
                                    });
            });
        </script>