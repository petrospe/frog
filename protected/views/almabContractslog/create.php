<?php
/* @var $this AlmabContractslogController */
/* @var $model AlmabContractslog */

$this->breadcrumbs=array(
	'Almab Contractslogs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'<i class="icon-th-list"></i> List AlmabContractslog', 'url'=>array('index')),
	array('label'=>'<i class="icon-edit"></i> ManageAlmabContractslog', 'url'=>array('admin')),
);
?>

<h1>Create AlmabContractslog</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>