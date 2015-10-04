<?php
/* @var $this AlmabUsersController */
/* @var $model AlmabUsers */

$this->breadcrumbs=array(
	'Almab Users'=>array('index'),
	$model->user_id,
);

$this->menu=array(
	array('label'=>'List AlmabUsers', 'url'=>array('index')),
	array('label'=>'Create AlmabUsers', 'url'=>array('create')),
	array('label'=>'Update AlmabUsers', 'url'=>array('update', 'id'=>$model->user_id)),
	array('label'=>'Delete AlmabUsers', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->user_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AlmabUsers', 'url'=>array('admin')),
);
?>

<h1>View AlmabUsers #<?php echo $model->user_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'user_id',
		'user_active',
		'username',
		'password',
		'user_session_time',
		'user_session_page',
		'user_lastvisit',
		'user_regdate',
		'user_level',
		'user_posts',
		'user_timezone',
		'user_style',
		'user_lang',
		'user_dateformat',
		'user_new_privmsg',
		'user_unread_privmsg',
		'user_last_privmsg',
		'user_login_tries',
		'user_last_login_try',
		'user_emailtime',
		'user_viewemail',
		'user_attachsig',
		'user_allowhtml',
		'user_allowbbcode',
		'user_allowsmile',
		'user_allowavatar',
		'user_allow_pm',
		'user_allow_viewonline',
		'user_notify',
		'user_notify_pm',
		'user_popup_pm',
		'user_rank',
		'user_avatar',
		'user_avatar_type',
		'user_email',
		'user_icq',
		'user_website',
		'user_from',
		'user_sig',
		'user_sig_bbcode_uid',
		'user_aim',
		'user_yim',
		'user_msnm',
		'user_occ',
		'user_interests',
		'user_actkey',
		'user_newpasswd',
	),
)); ?>
