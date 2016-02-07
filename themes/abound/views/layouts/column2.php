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
        if (Yii::app()->user->isSuperuser) {
        require_once Yii::app()->basePath . '/../themes/abound/views/site/customFunctions.php';
        echo "<table class='table table-striped table-bordered'>
                <tbody>
                  <tr>
                    <td width='50%'>Bandwith Usage</td>
                    <td>
                      <div class='progress progress-danger'>
                        <div class='bar' style='width: ".($speed*100)/4 ."%'></div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Disk Space</td>
                    <td>
                      <div class='progress progress-warning'>
                        <div class='bar' style='width: ".($df*100)/$ds."%'></div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Memory Usage</td>
                    <td>
                      <div class='progress progress-success'>
                        <div class='bar' style='width: ".($memuse*100)/128 ."%'></div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>CPU load</td>
                    <td>
                      <div class='progress progress-info'>
                        <div class='bar' style='width: ".get_server_cpu_usage() ."%'></div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>     
	<div class='well'>
                <dl class='dl-horizontal'>
                  <dt>Total Customers</dt>
                  <dd>".implode("",getAllCustomers())."</dd>
                  <dt>Ongoing Services</dt>
                  <dd>".implode("",getActiveCustomers())."</dd>
                  <dt>Overdue Services</dt>
                  <dd>".implode("",getInactiveCustomers())."</dd>
                  <dt>Total Users</dt>
                  <dd>".implode("",getTotalUsers())."</dd>
                </dl>
            </div>";
        }
		?>
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