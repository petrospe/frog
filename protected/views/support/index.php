<?php
/* @var $this SupportController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Supports',
);

$this->menu=array(
	array('label'=>'Create Support', 'url'=>array('create')),
	array('label'=>'Manage Support', 'url'=>array('admin')),
);
?>

<h1>Supports</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
