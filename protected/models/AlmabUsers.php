<?php

/**
 * This is the model class for table "almab_users".
 *
 * The followings are the available columns in table 'almab_users':
 * @property integer $user_id
 * @property integer $user_active
 * @property string $username
 * @property string $user_password
 * @property integer $user_session_time
 * @property integer $user_session_page
 * @property integer $user_lastvisit
 * @property integer $user_regdate
 * @property integer $user_level
 * @property integer $user_posts
 * @property string $user_timezone
 * @property integer $user_style
 * @property string $user_lang
 * @property string $user_dateformat
 * @property integer $user_new_privmsg
 * @property integer $user_unread_privmsg
 * @property integer $user_last_privmsg
 * @property integer $user_login_tries
 * @property integer $user_last_login_try
 * @property integer $user_emailtime
 * @property integer $user_viewemail
 * @property integer $user_attachsig
 * @property integer $user_allowhtml
 * @property integer $user_allowbbcode
 * @property integer $user_allowsmile
 * @property integer $user_allowavatar
 * @property integer $user_allow_pm
 * @property integer $user_allow_viewonline
 * @property integer $user_notify
 * @property integer $user_notify_pm
 * @property integer $user_popup_pm
 * @property integer $user_rank
 * @property string $user_avatar
 * @property integer $user_avatar_type
 * @property string $user_email
 * @property string $user_icq
 * @property string $user_website
 * @property string $user_from
 * @property string $user_sig
 * @property string $user_sig_bbcode_uid
 * @property string $user_aim
 * @property string $user_yim
 * @property string $user_msnm
 * @property string $user_occ
 * @property string $user_interests
 * @property string $user_actkey
 * @property string $user_newpasswd
 */
class AlmabUsers extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'almab_users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_active, user_session_time, user_session_page, user_lastvisit, user_regdate, user_level, user_posts, user_style, user_new_privmsg, user_unread_privmsg, user_last_privmsg, user_login_tries, user_last_login_try, user_emailtime, user_viewemail, user_attachsig, user_allowhtml, user_allowbbcode, user_allowsmile, user_allowavatar, user_allow_pm, user_allow_viewonline, user_notify, user_notify_pm, user_popup_pm, user_rank, user_avatar_type', 'numerical', 'integerOnly'=>true),
			array('username', 'length', 'max'=>25),
			array('user_password, user_actkey, user_newpasswd', 'length', 'max'=>32),
			array('user_timezone', 'length', 'max'=>5),
			array('user_lang, user_email, user_aim, user_yim, user_msnm, user_interests', 'length', 'max'=>255),
			array('user_dateformat', 'length', 'max'=>14),
			array('user_avatar, user_website, user_from, user_occ', 'length', 'max'=>100),
			array('user_icq', 'length', 'max'=>15),
			array('user_sig_bbcode_uid', 'length', 'max'=>10),
			array('user_sig', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('user_id, user_active, username, user_password, user_session_time, user_session_page, user_lastvisit, user_regdate, user_level, user_posts, user_timezone, user_style, user_lang, user_dateformat, user_new_privmsg, user_unread_privmsg, user_last_privmsg, user_login_tries, user_last_login_try, user_emailtime, user_viewemail, user_attachsig, user_allowhtml, user_allowbbcode, user_allowsmile, user_allowavatar, user_allow_pm, user_allow_viewonline, user_notify, user_notify_pm, user_popup_pm, user_rank, user_avatar, user_avatar_type, user_email, user_icq, user_website, user_from, user_sig, user_sig_bbcode_uid, user_aim, user_yim, user_msnm, user_occ, user_interests, user_actkey, user_newpasswd', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'user_id' => 'User',
			'user_active' => 'User Active',
			'username' => 'Username',
			'user_password' => 'User Password',
			'user_session_time' => 'User Session Time',
			'user_session_page' => 'User Session Page',
			'user_lastvisit' => 'User Lastvisit',
			'user_regdate' => 'User Regdate',
			'user_level' => 'User Level',
			'user_posts' => 'User Posts',
			'user_timezone' => 'User Timezone',
			'user_style' => 'User Style',
			'user_lang' => 'User Lang',
			'user_dateformat' => 'User Dateformat',
			'user_new_privmsg' => 'User New Privmsg',
			'user_unread_privmsg' => 'User Unread Privmsg',
			'user_last_privmsg' => 'User Last Privmsg',
			'user_login_tries' => 'User Login Tries',
			'user_last_login_try' => 'User Last Login Try',
			'user_emailtime' => 'User Emailtime',
			'user_viewemail' => 'User Viewemail',
			'user_attachsig' => 'User Attachsig',
			'user_allowhtml' => 'User Allowhtml',
			'user_allowbbcode' => 'User Allowbbcode',
			'user_allowsmile' => 'User Allowsmile',
			'user_allowavatar' => 'User Allowavatar',
			'user_allow_pm' => 'User Allow Pm',
			'user_allow_viewonline' => 'User Allow Viewonline',
			'user_notify' => 'User Notify',
			'user_notify_pm' => 'User Notify Pm',
			'user_popup_pm' => 'User Popup Pm',
			'user_rank' => 'User Rank',
			'user_avatar' => 'User Avatar',
			'user_avatar_type' => 'User Avatar Type',
			'user_email' => 'User Email',
			'user_icq' => 'User Icq',
			'user_website' => 'User Website',
			'user_from' => 'User From',
			'user_sig' => 'User Sig',
			'user_sig_bbcode_uid' => 'User Sig Bbcode Uid',
			'user_aim' => 'User Aim',
			'user_yim' => 'User Yim',
			'user_msnm' => 'User Msnm',
			'user_occ' => 'User Occ',
			'user_interests' => 'User Interests',
			'user_actkey' => 'User Actkey',
			'user_newpasswd' => 'User Newpasswd',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('user_active',$this->user_active);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('user_password',$this->user_password,true);
		$criteria->compare('user_session_time',$this->user_session_time);
		$criteria->compare('user_session_page',$this->user_session_page);
		$criteria->compare('user_lastvisit',$this->user_lastvisit);
		$criteria->compare('user_regdate',$this->user_regdate);
		$criteria->compare('user_level',$this->user_level);
		$criteria->compare('user_posts',$this->user_posts);
		$criteria->compare('user_timezone',$this->user_timezone,true);
		$criteria->compare('user_style',$this->user_style);
		$criteria->compare('user_lang',$this->user_lang,true);
		$criteria->compare('user_dateformat',$this->user_dateformat,true);
		$criteria->compare('user_new_privmsg',$this->user_new_privmsg);
		$criteria->compare('user_unread_privmsg',$this->user_unread_privmsg);
		$criteria->compare('user_last_privmsg',$this->user_last_privmsg);
		$criteria->compare('user_login_tries',$this->user_login_tries);
		$criteria->compare('user_last_login_try',$this->user_last_login_try);
		$criteria->compare('user_emailtime',$this->user_emailtime);
		$criteria->compare('user_viewemail',$this->user_viewemail);
		$criteria->compare('user_attachsig',$this->user_attachsig);
		$criteria->compare('user_allowhtml',$this->user_allowhtml);
		$criteria->compare('user_allowbbcode',$this->user_allowbbcode);
		$criteria->compare('user_allowsmile',$this->user_allowsmile);
		$criteria->compare('user_allowavatar',$this->user_allowavatar);
		$criteria->compare('user_allow_pm',$this->user_allow_pm);
		$criteria->compare('user_allow_viewonline',$this->user_allow_viewonline);
		$criteria->compare('user_notify',$this->user_notify);
		$criteria->compare('user_notify_pm',$this->user_notify_pm);
		$criteria->compare('user_popup_pm',$this->user_popup_pm);
		$criteria->compare('user_rank',$this->user_rank);
		$criteria->compare('user_avatar',$this->user_avatar,true);
		$criteria->compare('user_avatar_type',$this->user_avatar_type);
		$criteria->compare('user_email',$this->user_email,true);
		$criteria->compare('user_icq',$this->user_icq,true);
		$criteria->compare('user_website',$this->user_website,true);
		$criteria->compare('user_from',$this->user_from,true);
		$criteria->compare('user_sig',$this->user_sig,true);
		$criteria->compare('user_sig_bbcode_uid',$this->user_sig_bbcode_uid,true);
		$criteria->compare('user_aim',$this->user_aim,true);
		$criteria->compare('user_yim',$this->user_yim,true);
		$criteria->compare('user_msnm',$this->user_msnm,true);
		$criteria->compare('user_occ',$this->user_occ,true);
		$criteria->compare('user_interests',$this->user_interests,true);
		$criteria->compare('user_actkey',$this->user_actkey,true);
		$criteria->compare('user_newpasswd',$this->user_newpasswd,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AlmabUsers the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
