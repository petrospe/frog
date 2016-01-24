<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

  <div class="row-fluid">
	<div class="span3">
		<div class="sidebar-nav">
        
		  <?php 
                  if (Yii::app()->user->isSuperuser) {
                  $this->widget('zii.widgets.CMenu', array(
			/*'type'=>'list',*/
			'encodeLabel'=>false,
			'items'=>array(
				array('label'=>'<i class="icon icon-home"></i>  Dashboard <span class="label label-info pull-right">Home</span>', 'url'=>array('/site/index'),'itemOptions'=>array('class'=>'')),
                                /*
				array('label'=>'<i class="icon icon-search"></i> About this theme <span class="label label-important pull-right">HOT</span>', 'url'=>'http://www.webapplicationthemes.com/abound-yii-framework-theme/'),
				array('label'=>'<i class="icon icon-envelope"></i> Messages <span class="badge badge-success pull-right">12</span>', 'url'=>'#'),
                                 * 
                                 */
				// Include the operations menu
				array('label'=>'OPERATIONS','items'=>$this->menu),
			),
			));
                  } else {
                  $this->widget('zii.widgets.CMenu', array(
			/*'type'=>'list',*/
			'encodeLabel'=>false,
			'items'=>array(
				// Include the operations menu
				array('label'=>'OPERATIONS','items'=>$this->menu),
			),
			));
                  }
                  ?>
		</div>
        <br>
        <?php
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
        ?>
        <table class="table table-striped table-bordered">
          <tbody>
            <tr>
              <td width="50%">Bandwith Usage</td>
              <td>
              	<div class="progress progress-danger">
                  <div class="bar" style="width: <?php echo ($speed*100)/4; ?>%"></div>
                </div>
              </td>
            </tr>
            <tr>
              <td>Disk Space</td>
              <td>
             	<div class="progress progress-warning">
                  <div class="bar" style="width: <?php echo ($df*100)/$ds; ?>%"></div>
                </div>
              </td>
            </tr>
            <tr>
              <td>Memory Usage</td>
              <td>
             	<div class="progress progress-success">
                  <div class="bar" style="width: <?php echo ($memuse*100)/128; ?>%"></div>
                </div>
              </td>
            </tr>
            <tr>
              <td>CPU load</td>
              <td>
              	<div class="progress progress-info">
                  <div class="bar" style="width: <?php echo get_server_cpu_usage(); ?>%"></div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
		<div class="well">
        
            <dl class="dl-horizontal">
              <dt>Account status</dt>
              <dd>$1,234,002</dd>
              <dt>Open Invoices</dt>
              <dd>$245,000</dd>
              <dt>Overdue Invoices</dt>
              <dd>$20,023</dd>
              <dt>Converted Quotes</dt>
              <dd>$560,000</dd>
              
            </dl>
      </div>
		
    </div><!--/span-->
    <div class="span9">
    
    <?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
            'links'=>$this->breadcrumbs,
			'homeLink'=>CHtml::link('Dashboard'),
			'htmlOptions'=>array('class'=>'breadcrumb')
        )); ?><!-- breadcrumbs -->
    <?php endif?>
    
    <!-- Include content pages -->
    <?php echo $content; ?>

	</div><!--/span-->
  </div><!--/row-->


<?php $this->endContent(); ?>