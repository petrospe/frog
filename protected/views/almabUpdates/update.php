<?php
/* @var $this AlmabUpdatesController */
/* @var $model AlmabUpdates */

$this->breadcrumbs=array(
	'Almab Updates'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AlmabUpdates', 'url'=>array('index')),
	array('label'=>'Create AlmabUpdates', 'url'=>array('create')),
	array('label'=>'View AlmabUpdates', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AlmabUpdates', 'url'=>array('admin')),
);
?>

<h1>Update AlmabUpdates <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>