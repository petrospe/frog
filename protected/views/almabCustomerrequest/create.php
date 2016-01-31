<?php
/* @var $this AlmabCustomerrequestController */
/* @var $model AlmabCustomerrequest */

$this->breadcrumbs=array(
	'Almab Customerrequests'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'<i class="icon-th-list"></i> List AlmabCustomerrequest', 'url'=>array('index')),
	array('label'=>'<i class="icon-edit"></i> ManageAlmabCustomerrequest', 'url'=>array('admin')),
);
?>

<h1>Create AlmabCustomerrequest</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>