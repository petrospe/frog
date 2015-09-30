<?php
/* @var $this AlmabCustomerupdateController */
/* @var $model AlmabCustomerupdate */

$this->breadcrumbs=array(
	'Almab Customerupdates'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AlmabCustomerupdate', 'url'=>array('index')),
	array('label'=>'Create AlmabCustomerupdate', 'url'=>array('create')),
	array('label'=>'View AlmabCustomerupdate', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AlmabCustomerupdate', 'url'=>array('admin')),
);
?>

<h1>Update AlmabCustomerupdate <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>