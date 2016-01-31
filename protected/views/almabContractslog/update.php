<?php
/* @var $this AlmabContractslogController */
/* @var $model AlmabContractslog */

$this->breadcrumbs=array(
	'Almab Contractslogs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'<i class="icon-th-list"></i> List AlmabContractslog', 'url'=>array('index')),
//	array('label'=>'<i class="icon-plus-sign"></i> Create AlsmabContractslog', 'url'=>array('create')),
	array('label'=>'<i class="icon-user"></i> View AlmabContractslog', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'<i class="icon-edit"></i> ManageAlmabContractslog', 'url'=>array('admin')),
);
?>

<h1>Update AlmabContractslog <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>