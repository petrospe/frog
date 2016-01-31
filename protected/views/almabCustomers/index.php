<?php
/* @var $this AlmabCustomersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Almab Customers',
);

$this->menu=array(
	array('label'=>'<i class="icon-plus-sign"></i> Create AlmabCustomers', 'url'=>array('create')),
	array('label'=>'<i class="icon-edit"></i> Manage AlmabCustomers', 'url'=>array('admin')),
);
?>

<h1>Almab Customers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
