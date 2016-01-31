<?php
/* @var $this AlmabCustomerupdateController */
/* @var $model AlmabCustomerupdate */

$this->breadcrumbs=array(
	'Almab Customerupdates'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'<i class="icon-th-list"></i> List AlmabCustomerupdate', 'url'=>array('index')),
	array('label'=>'<i class="icon-edit"></i> ManageAlmabCustomerupdate', 'url'=>array('admin')),
);
?>

<h1>Create AlmabCustomerupdate</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>