<?php
/* @var $this FilesCategoriesController */
/* @var $model FilesCategories */

$this->breadcrumbs=array(
	'Files Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'<i class="icon-th-list"></i> List FilesCategories', 'url'=>array('index')),
	array('label'=>'<i class="icon-edit"></i> ManageFilesCategories', 'url'=>array('admin')),
);
?>

<h1>Create FilesCategories</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>