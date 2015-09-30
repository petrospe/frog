<?php
/* @var $this AlmabUsersController */
/* @var $model AlmabUsers */

$this->breadcrumbs=array(
	'Almab Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AlmabUsers', 'url'=>array('index')),
	array('label'=>'Manage AlmabUsers', 'url'=>array('admin')),
);
?>

<h1>Create AlmabUsers</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>