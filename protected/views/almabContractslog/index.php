<?php
/* @var $this AlmabContractslogController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Almab Contractslogs',
);

$this->menu=array(
//	array('label'=>'<i class="icon-plus-sign"></i> Create AlmabContractslog', 'url'=>array('create')),
	array('label'=>'<i class="icon-edit"></i> ManageAlmabContractslog', 'url'=>array('admin')),
);
?>

<h1>Almab Contractslogs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
