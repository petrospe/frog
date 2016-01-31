<?php
/* @var $this SupportController */
/* @var $model Support */

$this->breadcrumbs=array(
	'Support'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'<i class="icon-th-list"></i> List Support', 'url'=>array('index')),
	array('label'=>'<i class="icon-edit"></i> ManageSupport', 'url'=>array('admin')),
);
?>

<h1>Create Support</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>