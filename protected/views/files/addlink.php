<?php
$_SESSION['ckf'] = Yii::app()->user->id;
Yii::app()->clientScript->registerScriptFile(
	Yii::app()->baseUrl.'/ckfinder/ckfinder.js',
	CClientScript::POS_HEAD
);
Yii::app()->clientScript->registerScriptFile(
	Yii::app()->baseUrl.'/js/jsuri.min.js',
	CClientScript::POS_HEAD
);
Yii::app()->clientScript->registerScriptFile(
	Yii::app()->baseUrl.'/js/ckfinder.standalone.functions.js',
	CClientScript::POS_HEAD
);

$this->breadcrumbs=array(
	'Διαχείριση αρχείων περιεχομένου'=>array('admin'),
	'Προσθήκη αρχείου',
);

?>

<h1>Προσθήκη αρχείου</h1>
<br/>
<?php echo $this->renderPartial('_link', array('model'=>$model)); ?>