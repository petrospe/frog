<?php
/* @var $this AlmabUpdatesController */
/* @var $model AlmabUpdates */
/* @var $form CActiveForm */
?>
<?php
	$this->beginWidget('zii.widgets.CPortlet', array(
		'title'=>"Updates form",
	));
	
?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'almab-updates-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'file_name'); ?>
		<?php echo CHtml::activeFileField($model,'file_name',array('id'=>'filefinder','class'=>'btn')); ?>
                    <button class="btn btn-danger btn-large" onclick="$('#filefinder').val('');return false;">Clear file input</button>
                <!-- File attributes -->
		<?php echo $form->hiddenField($model,'file_type'); ?>
		<?php echo $form->hiddenField($model,'file_size'); ?>
		<?php echo $form->hiddenField($model,'file_path'); ?>
		<?php echo $form->hiddenField($model,'upddate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'version'); ?>
		<?php echo $form->textField($model,'version',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'version'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'requires'); ?>
		<?php echo $form->textField($model,'requires',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'requires'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-success btn-large')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php $this->endWidget(); ?> <!-- portlet -->