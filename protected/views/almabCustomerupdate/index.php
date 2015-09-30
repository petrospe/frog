<?php
/* @var $this AlmabCustomerupdateController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Almab Customerupdates',
);

$this->menu=array(
	array('label'=>'Create AlmabCustomerupdate', 'url'=>array('create')),
	array('label'=>'Manage AlmabCustomerupdate', 'url'=>array('admin')),
);
?>

<h1>Almab Customerupdates</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
