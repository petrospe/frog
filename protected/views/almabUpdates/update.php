<?php
/* @var $this AlmabUpdatesController */
/* @var $model AlmabUpdates */

$this->breadcrumbs=array(
	'Almab Updates'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'<i class="icon-th-list"></i> List AlmabUpdates', 'url'=>array('index')),
	array('label'=>'<i class="icon-plus-sign"></i> Create AlmabUpdates', 'url'=>array('create')),
	array('label'=>'<i class="icon-user"></i> View AlmabUpdates', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'<i class="icon-edit"></i> ManageAlmabUpdates', 'url'=>array('admin')),
);
?>

<h1>Update AlmabUpdates <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>