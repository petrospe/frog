<?php
/* @var $this AlmabContractsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Almab Contracts',
);

$this->menu=array(
	array('label'=>'Create AlmabContracts', 'url'=>array('create')),
	array('label'=>'Manage AlmabContracts', 'url'=>array('admin')),
);
?>

<h1>Almab Contracts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
