<?php
/* @var $this FilesController */
/* @var $model Files */
/* @var $form CActiveForm */
?>

<?php
	$this->beginWidget('zii.widgets.CPortlet', array(
		'title'=>"Files form",
	));
	
?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'files-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'filename'); ?>
		<?php echo $form->textField($model,'filename',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'filename'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'filename_sys'); ?>
		<?php echo CHtml::activeFileField($model,'filename_sys',array('size'=>60,'maxlength'=>255, 'multiple' => true, 'id'=>'filefinder', 'class'=>'btn')); ?>
                    <button class="btn btn-danger btn-large" onclick="$('#filefinder').val('');return false;">Clear file input</button>
                <!-- File attributes -->
                <?php echo $form->hiddenField($model,'file_type'); ?>
                <?php echo $form->hiddenField($model,'file_size'); ?>
                <?php echo $form->hiddenField($model,'file_path'); ?>
                <?php echo $form->hiddenField($model,'create_date'); ?>
		<?php echo $form->hiddenField($model,'modification_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'file_category_id'); ?>
		<?php echo $form->dropDownList($model,'file_category_id', FilesCategories::model() ->getTypeOptions()); ?>
		<?php echo $form->error($model,'file_category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'file_support_id'); ?>
		<?php echo $form->dropDownList($model,'file_support_id', Support::model() ->getTypeOptions(), array('prompt' => '-- None--')); ?>
		<?php echo $form->error($model,'file_support_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'file_customer_id'); ?>
		<?php echo $form->dropDownList($model,'file_customer_id', AlmabCustomers::model() ->getTypeOptions(), array('prompt' => '-- None--')); ?>
		<?php echo $form->error($model,'file_customer_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-success btn-large')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php $this->endWidget(); ?> <!-- portlet -->