<?php
/* @var $this AlmabContractslogController */
/* @var $model AlmabContractslog */

$this->breadcrumbs=array(
	'Almab Contractslogs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'<i class="icon-th-list"></i> List AlmabContractslog', 'url'=>array('index')),
//	array('label'=>'<i class="icon-plus-sign"></i> Create AlmabContractslog', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#almab-contractslog-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Almab Contractslogs</h1>

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
	'id'=>'almab-contractslog-grid',
        'itemsCssClass'=>'table table-striped table-bordered table-hover',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		/*
                'ContractId',
                 * 
                 */
                array(
                    'name'=>'almabcontractslog.CustomerName',
                    'filter'=>CHtml::activeTextField($model,'almabcontractslog_search'),
                    ),
		'DateOfUse',
		'MacAddress',
		'ComputerName',
		'UserName',
		/*
		'AccessGranted',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
