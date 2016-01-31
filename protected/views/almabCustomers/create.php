<?php
/* @var $this AlmabCustomersController */
/* @var $model AlmabCustomers */

$this->breadcrumbs=array(
	'Almab Customers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'<i class="icon-th-list"></i> List AlmabCustomers', 'url'=>array('index')),
	array('label'=>'<i class="icon-edit"></i> ManageAlmabCustomers', 'url'=>array('admin')),
);
?>

<h1>Create AlmabCustomers</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>