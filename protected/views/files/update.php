<?php
/* @var $this FilesController */
/* @var $model Files */

$this->breadcrumbs=array(
	'Files'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'<i class="icon-th-list"></i> List Files', 'url'=>array('index')),
	array('label'=>'<i class="icon-plus-sign"></i> Create Files', 'url'=>array('create')),
	array('label'=>'<i class="icon-user"></i> View Files', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'<i class="icon-edit"></i> ManageFiles', 'url'=>array('admin')),
);
?>

<h1>Update Files <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>