<?php
/* @var $this AlmabUpdatesController */
/* @var $model AlmabUpdates */

$this->breadcrumbs=array(
	'Almab Updates'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AlmabUpdates', 'url'=>array('index')),
	array('label'=>'Manage AlmabUpdates', 'url'=>array('admin')),
);
?>

<h1>Create AlmabUpdates</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>