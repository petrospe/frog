<?php
/* @var $this AlmabCustomerupdateController */
/* @var $model AlmabCustomerupdate */

$this->breadcrumbs=array(
	'Almab Customerupdates'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'<i class="icon-th-list"></i> List AlmabCustomerupdate', 'url'=>array('index')),
//	array('label'=>'<i class="icon-plus-sign"></i> Create AlmabCustomerupdate', 'url'=>array('create')),
	array('label'=>'<i class="icon-user"></i> View AlmabCustomerupdate', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'<i class="icon-edit"></i> ManageAlmabCustomerupdate', 'url'=>array('admin')),
);
?>

<h1>Update AlmabCustomerupdate <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>