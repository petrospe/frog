<?php
/* @var $this AlmabCustomersController */
/* @var $model AlmabCustomers */

$this->breadcrumbs=array(
	'Almab Customers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AlmabCustomers', 'url'=>array('index')),
	array('label'=>'Manage AlmabCustomers', 'url'=>array('admin')),
);
?>

<h1>Create AlmabCustomers</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>