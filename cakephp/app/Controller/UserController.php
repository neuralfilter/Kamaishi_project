<?php

App::uses('AppController', 'Controller');

class UserController extends AppController {
	public $name = 'User';
	public $components = array('Auth' => array(
		'authenticate' => array(
		'Facebook' => array(
			'fbAppId' => '283646215172410',
			'fbAppSecret' => '3e4e1fc6f0989b7fa6fdbaf7aa9a01f8',
			'fbScope' => 'publish_stream',
			'fbRedirect' =>
				'http://localhost:8888',
			'userModel' => 'FbUser',
			'fields' => array(
				'fbUserId' => 'fb_user_id',
				'fbToken' => 'fb_token',
			),
		)
	),
	'loginAction' => '/user/login',
	'loginRedirect' => '/user/index',
	'logoutRedirect' => '/',
	));

	function  beforeFilter(){
		parent::beforeFilter();
		$this->set('user', $this->Auth->user());
	}

	public function login($provider){
		$user = $this->Auth->uesr();
		if ($user){
			$this->redirect($this->Auth->loginRedirect);
		} else {
			$this->Auth->login();
		}
	}

	public function callback($provider){
		if ($this->Auth->login()){
			$this->redirect($this->Auth->redirectUrl());
		}
	}

	public function logout(){
		$this->Auth->logout();
		$this->redirect($this->Auth->logoutRedirect);
	}
}
?>