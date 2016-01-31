<?php
/* @var $this FilesCategoriesController */
/* @var $model FilesCategories */

$this->breadcrumbs=array(
	'Files Categories'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'<i class="icon-th-list"></i> List FilesCategories', 'url'=>array('index')),
	array('label'=>'<i class="icon-plus-sign"></i> Create FilesCategories', 'url'=>array('create')),
	array('label'=>'<i class="icon-user"></i> View FilesCategories', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'<i class="icon-edit"></i> ManageFilesCategories', 'url'=>array('admin')),
);
?>

<h1>Update FilesCategories <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>