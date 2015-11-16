<?php
/* @var $this FilesController */
/* @var $model Files */
/* @var $form CActiveForm */
$_SESSION['CKFINDER']['disabled'] = false; // enables the file browser in the admin
$_SESSION['CKFINDER']['uploadURL'] = Yii::app()->baseUrl."/uploads/"; // URL for the uploads folder
$_SESSION['CKFINDER']['uploadDir'] = Yii::app()->basePath."/../../uploads/"; // path to the uploads folder
?>
<script src="<?php echo Yii::app()->baseUrl.'/ckeditor/ckfinder.js'; ?>"></script>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'files-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
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
		<?php echo $form->textField($model,'filename_sys',array('size'=>60,'maxlength'=>255, 'id'=>'filefinder')); ?>
		<?php echo $form->error($model,'filename_sys'); ?>
                <!-- File attributes -->
                <?php echo $form->hiddenField($model,'file_type'); ?>
		<?php echo $form->error($model,'file_type'); ?>
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
		<?php echo $form->textField($model,'file_support_id'); ?>
		<?php echo $form->error($model,'file_support_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'file_customer_id'); ?>
		<?php echo $form->textField($model,'file_customer_id'); ?>
		<?php echo $form->error($model,'file_customer_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

<script type="text/javascript">
    CKFinder.widget( 'filefinder' );
</script>

</div><!-- form -->