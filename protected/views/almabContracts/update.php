<?php
/* @var $this AlmabContractsController */
/* @var $model AlmabContracts */

$this->breadcrumbs=array(
	'Almab Contracts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'<i class="icon-th-list"></i> List AlmabContracts', 'url'=>array('index')),
	array('label'=>'<i class="icon-plus-sign"></i> Create AlmabContracts', 'url'=>array('create')),
	array('label'=>'<i class="icon-user"></i> View AlmabContracts', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'<i class="icon-edit"></i> ManageAlmabContracts', 'url'=>array('admin')),
);
?>

<h1>Update AlmabContracts <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>