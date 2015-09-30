<?php
/* @var $this AlmabUpdatesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Almab Updates',
);

$this->menu=array(
	array('label'=>'Create AlmabUpdates', 'url'=>array('create')),
	array('label'=>'Manage AlmabUpdates', 'url'=>array('admin')),
);
?>

<h1>Almab Updates</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
