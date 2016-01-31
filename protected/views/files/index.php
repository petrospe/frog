<?php
/* @var $this FilesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Files',
);

$this->menu=array(
	array('label'=>'<i class="icon-plus-sign"></i> Create Files', 'url'=>array('create')),
	array('label'=>'<i class="icon-edit"></i> Manage Files', 'url'=>array('admin')),
);
?>

<h1>Files</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
