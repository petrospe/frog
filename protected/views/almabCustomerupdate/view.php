<?php
/* @var $this AlmabCustomerupdateController */
/* @var $model AlmabCustomerupdate */

$this->breadcrumbs=array(
	'Almab Customerupdates'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'<i class="icon-th-list"></i> List AlmabCustomerupdate', 'url'=>array('index')),
//	array('label'=>'<i class="icon-plus-sign"></i> Create AlmabCustomerupdate', 'url'=>array('create')),
	array('label'=>'<i class="icon-pencil"></i> Update AlmabCustomerupdate', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'<i class="icon-trash"></i> Delete AlmabCustomerupdate', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'<i class="icon-edit"></i> ManageAlmabCustomerupdate', 'url'=>array('admin')),
);
?>

<h1>View AlmabCustomerupdate #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
        'htmlOptions'=>array('class'=>'table table-striped table-bordered table-hover'),
	'attributes'=>array(
		'id',
		'customerid',
		'updateid',
		'condate',
		'action',
	),
)); ?>
