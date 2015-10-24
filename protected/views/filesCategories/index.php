<?php
/* @var $this FilesCategoriesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Files Categories',
);

$this->menu=array(
	array('label'=>'Create FilesCategories', 'url'=>array('create')),
	array('label'=>'Manage FilesCategories', 'url'=>array('admin')),
);
?>

<h1>Files Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
