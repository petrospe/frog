<?php
/* @var $this AlmabUsersController */
/* @var $model AlmabUsers */

$this->breadcrumbs=array(
	'Almab Users'=>array('index'),
	$model->user_id=>array('view','id'=>$model->user_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AlmabUsers', 'url'=>array('index')),
	array('label'=>'Create AlmabUsers', 'url'=>array('create')),
	array('label'=>'View AlmabUsers', 'url'=>array('view', 'id'=>$model->user_id)),
	array('label'=>'Manage AlmabUsers', 'url'=>array('admin')),
);
?>

<h1>Update AlmabUsers <?php echo $model->user_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>