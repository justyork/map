<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity{
	private $_id;

	/**
	 * Authenticates a user.
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate(){

		if($this->username == 'admin')
			$user = Users::model()->findByPk(1);
		else
			$user = Users::model()->find('LOWER(email)=?',array(strtolower($this->username)));


		if($user === null)
			$this->errorCode = self::ERROR_USERNAME_INVALID;
		else {
			$secret_key = Yii::app()->params['secretKey'];
			$salt = $user->salt;
			$pwd = $this->password;

//			echo $secret_key . ' ';
			$password = md5( $salt . $pwd . $secret_key );

//			echo $password;
			//echo ' ';
			//echo $user->password;

			if($user->password != $password)
				$this->errorCode = self::ERROR_PASSWORD_INVALID;
			else{

				$this->setState('fullName', $user->name . ' ' . $user->surname);
				$this->setState('email', $user->email);
				$this->setState('group', $user->group_id);
				$this->setState('actions', $user->_group->actions);


				$this->_id = $user->id;
				$this->username = $user->email;
				$this->errorCode = self::ERROR_NONE;
			}
		}
		return $this->errorCode == self::ERROR_NONE;
	}

	/**
	 * @return integer the ID of the user record
	 */
	public function getId()
	{
		return $this->_id;
	}
}