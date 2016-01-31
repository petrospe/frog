<?php
/* @var $this AlmabContractsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Almab Contracts',
);

$this->menu=array(
	array('label'=>'<i class="icon-plus-sign"></i> Create AlmabContracts', 'url'=>array('create')),
	array('label'=>'<i class="icon-edit"></i> ManageAlmabContracts', 'url'=>array('admin')),
);
?>

<h1>Almab Contracts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
