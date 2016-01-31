<?php
/* @var $this AlmabCustomersController */
/* @var $model AlmabCustomers */

$this->breadcrumbs=array(
	'Almab Customers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'<i class="icon-th-list"></i> List AlmabCustomers', 'url'=>array('index')),
	array('label'=>'<i class="icon-plus-sign"></i> Create AlmabCustomers', 'url'=>array('create')),
	array('label'=>'<i class="icon-user"></i> View AlmabCustomers', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'<i class="icon-edit"></i> ManageAlmabCustomers', 'url'=>array('admin')),
);
?>

<h1>Update AlmabCustomers <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>