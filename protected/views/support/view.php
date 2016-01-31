<?php
/* @var $this SupportController */
/* @var $model Support */

$this->breadcrumbs=array(
	'Support'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'<i class="icon-th-list"></i> List Support', 'url'=>array('index')),
	array('label'=>'<i class="icon-plus-sign"></i> Create Support', 'url'=>array('create')),
	array('label'=>'<i class="icon-pencil"></i> Update Support', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'<i class="icon-trash"></i> Delete Support', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'<i class="icon-edit"></i> ManageSupport', 'url'=>array('admin')),
);
?>

<h1>View Support #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
        'htmlOptions'=>array('class'=>'table table-striped table-bordered table-hover'),
	'attributes'=>array(
		'id',
		'description:html',
		'solution:html',
	),
)); ?>
