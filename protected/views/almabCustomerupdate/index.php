<?php
/* @var $this AlmabCustomerupdateController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Almab Customerupdates',
);

$this->menu=array(
//	array('label'=>'<i class="icon-plus-sign"></i> Create AlmabCustomerupdate', 'url'=>array('create')),
	array('label'=>'<i class="icon-edit"></i> Manage AlmabCustomerupdate', 'url'=>array('admin')),
);
?>

<h1>Almab Customerupdates</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
