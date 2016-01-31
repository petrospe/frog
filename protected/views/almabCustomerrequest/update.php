<?php
/* @var $this AlmabCustomerrequestController */
/* @var $model AlmabCustomerrequest */

$this->breadcrumbs=array(
	'Almab Customerrequests'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'<i class="icon-th-list"></i> List AlmabCustomerrequest', 'url'=>array('index')),
//	array('label'=>'<i class="icon-plus-sign"></i> Create AlmabCustomerrequest', 'url'=>array('create')),
	array('label'=>'<i class="icon-user"></i> View AlmabCustomerrequest', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'<i class="icon-edit"></i> ManageAlmabCustomerrequest', 'url'=>array('admin')),
);
?>

<h1>Update AlmabCustomerrequest <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>