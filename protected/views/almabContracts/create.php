<?php
/* @var $this AlmabContractsController */
/* @var $model AlmabContracts */

$this->breadcrumbs=array(
	'Almab Contracts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AlmabContracts', 'url'=>array('index')),
	array('label'=>'Manage AlmabContracts', 'url'=>array('admin')),
);
?>

<h1>Create AlmabContracts</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>