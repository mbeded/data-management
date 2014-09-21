<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
    private $_id;
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
        $result = Users::model()->find(
            'username=:x',
            array(
                ':x' => $this->username
            )
        );

        if ($result->password != md5($this->password))
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
		else{
            $this->_id = $result->user_id;
            $this->username = $result->username;
            $this->errorCode=self::ERROR_NONE;
        }
		return !$this->errorCode;
	}

    public function getId()
    {
        return $this->_id;
    }
}