<?php
/* @var $this AlmabUsersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Almab Users',
);

$this->menu=array(
	array('label'=>'Create AlmabUsers', 'url'=>array('create')),
	array('label'=>'Manage AlmabUsers', 'url'=>array('admin')),
);
?>

<h1>Almab Users</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
