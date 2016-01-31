<?php
/* @var $this SupportController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Support',
);

$this->menu=array(
	array('label'=>'<i class="icon-plus-sign"></i> Create Support', 'url'=>array('create')),
	array('label'=>'<i class="icon-edit"></i> Manage Support', 'url'=>array('admin')),
);
?>

<h1>Support</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
