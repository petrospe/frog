<?php
/* @var $this AlmabUsersController */
/* @var $model AlmabUsers */

$this->breadcrumbs=array(
	'Almab Users'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List AlmabUsers', 'url'=>array('index')),
	array('label'=>'Create AlmabUsers', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#almab-users-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Almab Users</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'almab-users-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'user_id',
		'user_active',
		'username',
		'password',
		'user_session_time',
		'user_session_page',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
