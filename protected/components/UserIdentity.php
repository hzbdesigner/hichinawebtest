<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	 private $_id;
	 private $_name;
    /**
     * Authenticates a user using the User data model.
     * @return boolean whether authentication succeeds.
     */
    public function authenticate(){
		$user=User::model()->find('LOWER(email)=?',array(strtolower($this->username)));//�����¼
		if ($user === null) {
			$this->errorCode = self::ERROR_USERNAME_INVALID;
		}else {
			if ($user->password !== $this->password) {
				$this->errorCode = self::ERROR_PASSWORD_INVALID;
			}else{
				$this->_id = $user->uid;
				$this->_name = $user->username;
				$this->errorCode = self::ERROR_NONE;
			}
		}
        return $this->errorCode == self::ERROR_NONE;
    }
 
    public function getId() {
        return $this->_id;
    }
	
	public function getName() {
        return $this->_name;
    }
}