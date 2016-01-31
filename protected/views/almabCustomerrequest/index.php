<?php
/* @var $this AlmabCustomerrequestController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Almab Customerrequests',
);

$this->menu=array(
//	array('label'=>'<i class="icon-plus-sign"></i> Create AlmabCustomerrequest', 'url'=>array('create')),
	array('label'=>'<i class="icon-edit"></i> ManageAlmabCustomerrequest', 'url'=>array('admin')),
);
?>

<h1>Almab Customerrequests</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
