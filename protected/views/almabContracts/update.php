<?php
/* @var $this AlmabContractsController */
/* @var $model AlmabContracts */

$this->breadcrumbs=array(
	'Almab Contracts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AlmabContracts', 'url'=>array('index')),
	array('label'=>'Create AlmabContracts', 'url'=>array('create')),
	array('label'=>'View AlmabContracts', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AlmabContracts', 'url'=>array('admin')),
);
?>

<h1>Update AlmabContracts <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>