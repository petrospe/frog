<?php
/* @var $this FilesController */
/* @var $model Files */

$this->breadcrumbs=array(
	'Files'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'<i class="icon-th-list"></i> List Files', 'url'=>array('index')),
	array('label'=>'<i class="icon-plus-sign"></i> Create Files', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#files-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Files</h1>

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
	'id'=>'files-grid',
        'itemsCssClass'=>'table table-striped table-bordered table-hover',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'filename',
                /*
		'filename_sys',
		'file_type',
                 */
		'file_size',
                array(
                    'type'=>'raw',
                    'value'=>'CHtml::link($data->file_path, $data->file_path ,array("target"=>"_blank"))',
                    'name'=>'file_path',
                    ),
		/*
		'file_category_id',
		'file_support_id',
		'file_customer_id',
                 */
                array(
                    'name'=>'almabcustomers.descr',
                    'filter'=>CHtml::activeTextField($model,'almabcustomers_search'),
                    ),
		'create_date',
		'modification_date',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
