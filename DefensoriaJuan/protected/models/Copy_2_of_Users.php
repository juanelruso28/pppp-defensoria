<?php

/**
 * User class.
 * User is the data structure for keeping
 * contact form data. It is used by the 'contact' action of 'SiteController'.
 */

class Users extends CActiveRecord{

	/**
	 * metodo necesario para retornar el nombre de la tbl. 
	 * Sino se especifica por default se toma el nombre de la clase "User" como nombre de la tabla.
	 * Al igual que en codeigniter
	 * 
	 * DB usada "facilito"
	 */
	 public function tableName()
	 {
	 	return "tbl_user";
	 }	
}


/*
class User extends CActiveRecord
{
	public $name;
	public $email;
	public $subject;
	public $body;
	public $verifyCode;

	/**
	 * Declares the validation rules.
	 * /
	public function rules()
	{
		return array(
			// name, email, subject and body are required
			array('name, email, subject, body', 'required'),
			// email has to be a valid email address
			array('email', 'email'),
			// verifyCode needs to be entered correctly
			array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
		);
	}

	/**
	 * Declares customized attribute labels.
	 * If not declared here, an attribute would have a label that is
	 * the same as its name with the first letter in upper case.
	 * /
	public function attributeLabels()
	{
		return array(
			'verifyCode'=>'Verification Code',
		);
	}
}
*/