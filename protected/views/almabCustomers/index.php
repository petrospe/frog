<?php
/* @var $this AlmabCustomersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Almab Customers',
);

$this->menu=array(
	array('label'=>'Create AlmabCustomers', 'url'=>array('create')),
	array('label'=>'Manage AlmabCustomers', 'url'=>array('admin')),
);
?>

<h1>Almab Customers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
