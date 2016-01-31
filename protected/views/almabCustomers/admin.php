<?php
/* @var $this AlmabCustomersController */
/* @var $model AlmabCustomers */

$this->breadcrumbs=array(
	'Almab Customers'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'<i class="icon-th-list"></i> List AlmabCustomers', 'url'=>array('index')),
	array('label'=>'<i class="icon-plus-sign"></i> Create AlmabCustomers', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#almab-customers-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Almab Customers</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'almab-customers-grid',
        'itemsCssClass'=>'table table-striped table-bordered table-hover',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'descr',
		'email',
		'guid',
		'updatefrom',
		'updateto',
		/*
		'dbserial',
		*/
                'iscustom',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
