<?php
/* @var $this AlmabContractslogController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Almab Contractslogs',
);

$this->menu=array(
	array('label'=>'Create AlmabContractslog', 'url'=>array('create')),
	array('label'=>'Manage AlmabContractslog', 'url'=>array('admin')),
);
?>

<h1>Almab Contractslogs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
