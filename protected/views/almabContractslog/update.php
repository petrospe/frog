<?php
/* @var $this AlmabContractslogController */
/* @var $model AlmabContractslog */

$this->breadcrumbs=array(
	'Almab Contractslogs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AlmabContractslog', 'url'=>array('index')),
	array('label'=>'Create AlmabContractslog', 'url'=>array('create')),
	array('label'=>'View AlmabContractslog', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AlmabContractslog', 'url'=>array('admin')),
);
?>

<h1>Update AlmabContractslog <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>