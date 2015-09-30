<?php
/* @var $this AlmabCustomerrequestController */
/* @var $model AlmabCustomerrequest */

$this->breadcrumbs=array(
	'Almab Customerrequests'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AlmabCustomerrequest', 'url'=>array('index')),
	array('label'=>'Create AlmabCustomerrequest', 'url'=>array('create')),
	array('label'=>'View AlmabCustomerrequest', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AlmabCustomerrequest', 'url'=>array('admin')),
);
?>

<h1>Update AlmabCustomerrequest <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>