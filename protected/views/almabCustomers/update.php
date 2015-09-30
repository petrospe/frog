<?php
/* @var $this AlmabCustomersController */
/* @var $model AlmabCustomers */

$this->breadcrumbs=array(
	'Almab Customers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AlmabCustomers', 'url'=>array('index')),
	array('label'=>'Create AlmabCustomers', 'url'=>array('create')),
	array('label'=>'View AlmabCustomers', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AlmabCustomers', 'url'=>array('admin')),
);
?>

<h1>Update AlmabCustomers <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>