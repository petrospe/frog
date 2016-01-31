<?php
/* @var $this SupportController */
/* @var $model Support */

$this->breadcrumbs=array(
	'Support'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'<i class="icon-th-list"></i> List Support', 'url'=>array('index')),
	array('label'=>'<i class="icon-plus-sign"></i> Create Support', 'url'=>array('create')),
	array('label'=>'<i class="icon-user"></i> View Support', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'<i class="icon-edit"></i> ManageSupport', 'url'=>array('admin')),
);
?>

<h1>Update Support <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>