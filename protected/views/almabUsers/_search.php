<?php
/* @var $this AlmabUsersController */
/* @var $model AlmabUsers */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_active'); ?>
		<?php echo $form->textField($model,'user_active'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_session_time'); ?>
		<?php echo $form->textField($model,'user_session_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_session_page'); ?>
		<?php echo $form->textField($model,'user_session_page'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_lastvisit'); ?>
		<?php echo $form->textField($model,'user_lastvisit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_regdate'); ?>
		<?php echo $form->textField($model,'user_regdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_level'); ?>
		<?php echo $form->textField($model,'user_level'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_posts'); ?>
		<?php echo $form->textField($model,'user_posts'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_timezone'); ?>
		<?php echo $form->textField($model,'user_timezone',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_style'); ?>
		<?php echo $form->textField($model,'user_style'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_lang'); ?>
		<?php echo $form->textField($model,'user_lang',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_dateformat'); ?>
		<?php echo $form->textField($model,'user_dateformat',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_new_privmsg'); ?>
		<?php echo $form->textField($model,'user_new_privmsg'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_unread_privmsg'); ?>
		<?php echo $form->textField($model,'user_unread_privmsg'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_last_privmsg'); ?>
		<?php echo $form->textField($model,'user_last_privmsg'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_login_tries'); ?>
		<?php echo $form->textField($model,'user_login_tries'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_last_login_try'); ?>
		<?php echo $form->textField($model,'user_last_login_try'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_emailtime'); ?>
		<?php echo $form->textField($model,'user_emailtime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_viewemail'); ?>
		<?php echo $form->textField($model,'user_viewemail'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_attachsig'); ?>
		<?php echo $form->textField($model,'user_attachsig'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_allowhtml'); ?>
		<?php echo $form->textField($model,'user_allowhtml'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_allowbbcode'); ?>
		<?php echo $form->textField($model,'user_allowbbcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_allowsmile'); ?>
		<?php echo $form->textField($model,'user_allowsmile'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_allowavatar'); ?>
		<?php echo $form->textField($model,'user_allowavatar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_allow_pm'); ?>
		<?php echo $form->textField($model,'user_allow_pm'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_allow_viewonline'); ?>
		<?php echo $form->textField($model,'user_allow_viewonline'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_notify'); ?>
		<?php echo $form->textField($model,'user_notify'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_notify_pm'); ?>
		<?php echo $form->textField($model,'user_notify_pm'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_popup_pm'); ?>
		<?php echo $form->textField($model,'user_popup_pm'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_rank'); ?>
		<?php echo $form->textField($model,'user_rank'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_avatar'); ?>
		<?php echo $form->textField($model,'user_avatar',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_avatar_type'); ?>
		<?php echo $form->textField($model,'user_avatar_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_email'); ?>
		<?php echo $form->textField($model,'user_email',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_icq'); ?>
		<?php echo $form->textField($model,'user_icq',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_website'); ?>
		<?php echo $form->textField($model,'user_website',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_from'); ?>
		<?php echo $form->textField($model,'user_from',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_sig'); ?>
		<?php echo $form->textArea($model,'user_sig',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_sig_bbcode_uid'); ?>
		<?php echo $form->textField($model,'user_sig_bbcode_uid',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_aim'); ?>
		<?php echo $form->textField($model,'user_aim',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_yim'); ?>
		<?php echo $form->textField($model,'user_yim',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_msnm'); ?>
		<?php echo $form->textField($model,'user_msnm',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_occ'); ?>
		<?php echo $form->textField($model,'user_occ',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_interests'); ?>
		<?php echo $form->textField($model,'user_interests',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_actkey'); ?>
		<?php echo $form->textField($model,'user_actkey',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_newpasswd'); ?>
		<?php echo $form->textField($model,'user_newpasswd',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->