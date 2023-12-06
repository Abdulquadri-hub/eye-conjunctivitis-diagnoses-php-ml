<?php

namespace Model;

defined('ROOTPATH') OR exit('Access Denied!');

/**
 * Diagnosis class
 */
class Diagnosis
{
	
	use Model;

	protected $table = '{table}';
	protected $primaryKey = 'id';
	protected $loginUniqueColumn = 'email';

	protected $allowedColumns = [

		'username',
		'email',
		'password',
	];

	/*****************************
	 * 	rules include:
		required
		alpha
		email
		numeric
		unique
		symbol
		longer_than_8_chars
		alpha_numeric_symbol
		alpha_numeric
		alpha_symbol
	 * 
	 ****************************/
	protected $onInsertValidationRules = [

	];

	protected $onUpdateValidationRules = [
		'key' => [
			'rules'
		],
	];

	public function validateForm($DATA){

		$this->errors = [];

		if(!isset($DATA['itching'])){

			$this->errors['itching'] = "please an option";
		}

		if(count($this->errors) > 0){
			return true;
		}

		return false;
	}

	public function edit(){}

	public function delete(){}


}