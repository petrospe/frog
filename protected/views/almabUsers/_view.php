<?php
/* @var $this AlmabUsersController */
/* @var $data AlmabUsers */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->user_id), array('view', 'id'=>$data->user_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_active')); ?>:</b>
	<?php echo CHtml::encode($data->user_active); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_password')); ?>:</b>
	<?php echo CHtml::encode($data->user_password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_session_time')); ?>:</b>
	<?php echo CHtml::encode($data->user_session_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_session_page')); ?>:</b>
	<?php echo CHtml::encode($data->user_session_page); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_lastvisit')); ?>:</b>
	<?php echo CHtml::encode($data->user_lastvisit); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_regdate')); ?>:</b>
	<?php echo CHtml::encode($data->user_regdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_level')); ?>:</b>
	<?php echo CHtml::encode($data->user_level); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_posts')); ?>:</b>
	<?php echo CHtml::encode($data->user_posts); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_timezone')); ?>:</b>
	<?php echo CHtml::encode($data->user_timezone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_style')); ?>:</b>
	<?php echo CHtml::encode($data->user_style); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_lang')); ?>:</b>
	<?php echo CHtml::encode($data->user_lang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_dateformat')); ?>:</b>
	<?php echo CHtml::encode($data->user_dateformat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_new_privmsg')); ?>:</b>
	<?php echo CHtml::encode($data->user_new_privmsg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_unread_privmsg')); ?>:</b>
	<?php echo CHtml::encode($data->user_unread_privmsg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_last_privmsg')); ?>:</b>
	<?php echo CHtml::encode($data->user_last_privmsg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_login_tries')); ?>:</b>
	<?php echo CHtml::encode($data->user_login_tries); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_last_login_try')); ?>:</b>
	<?php echo CHtml::encode($data->user_last_login_try); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_emailtime')); ?>:</b>
	<?php echo CHtml::encode($data->user_emailtime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_viewemail')); ?>:</b>
	<?php echo CHtml::encode($data->user_viewemail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_attachsig')); ?>:</b>
	<?php echo CHtml::encode($data->user_attachsig); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_allowhtml')); ?>:</b>
	<?php echo CHtml::encode($data->user_allowhtml); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_allowbbcode')); ?>:</b>
	<?php echo CHtml::encode($data->user_allowbbcode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_allowsmile')); ?>:</b>
	<?php echo CHtml::encode($data->user_allowsmile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_allowavatar')); ?>:</b>
	<?php echo CHtml::encode($data->user_allowavatar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_allow_pm')); ?>:</b>
	<?php echo CHtml::encode($data->user_allow_pm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_allow_viewonline')); ?>:</b>
	<?php echo CHtml::encode($data->user_allow_viewonline); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_notify')); ?>:</b>
	<?php echo CHtml::encode($data->user_notify); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_notify_pm')); ?>:</b>
	<?php echo CHtml::encode($data->user_notify_pm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_popup_pm')); ?>:</b>
	<?php echo CHtml::encode($data->user_popup_pm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_rank')); ?>:</b>
	<?php echo CHtml::encode($data->user_rank); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_avatar')); ?>:</b>
	<?php echo CHtml::encode($data->user_avatar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_avatar_type')); ?>:</b>
	<?php echo CHtml::encode($data->user_avatar_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_email')); ?>:</b>
	<?php echo CHtml::encode($data->user_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_icq')); ?>:</b>
	<?php echo CHtml::encode($data->user_icq); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_website')); ?>:</b>
	<?php echo CHtml::encode($data->user_website); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_from')); ?>:</b>
	<?php echo CHtml::encode($data->user_from); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_sig')); ?>:</b>
	<?php echo CHtml::encode($data->user_sig); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_sig_bbcode_uid')); ?>:</b>
	<?php echo CHtml::encode($data->user_sig_bbcode_uid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_aim')); ?>:</b>
	<?php echo CHtml::encode($data->user_aim); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_yim')); ?>:</b>
	<?php echo CHtml::encode($data->user_yim); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_msnm')); ?>:</b>
	<?php echo CHtml::encode($data->user_msnm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_occ')); ?>:</b>
	<?php echo CHtml::encode($data->user_occ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_interests')); ?>:</b>
	<?php echo CHtml::encode($data->user_interests); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_actkey')); ?>:</b>
	<?php echo CHtml::encode($data->user_actkey); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_newpasswd')); ?>:</b>
	<?php echo CHtml::encode($data->user_newpasswd); ?>
	<br />

	*/ ?>

</div>