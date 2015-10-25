<?php
/* @var $this SupportController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Support',
);

$this->menu=array(
	array('label'=>'Create Support', 'url'=>array('create')),
	array('label'=>'Manage Support', 'url'=>array('admin')),
);
?>

<h1>Support</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
