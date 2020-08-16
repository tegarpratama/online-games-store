<?php

function is_login(){
	$CI =& get_instance();
	
	if($CI->session->userdata('login') == FALSE){
		$CI->session->set_flashdata('error', 'Please sign in.');
		redirect('login');
	}
}
	
function is_admin()
{
	$CI =& get_instance();

	is_login();
	
	if($CI->session->userdata('role') != 1){
		redirect('errors');
	}
}

function hashEncrypt($input){

	$hash = password_hash($input, PASSWORD_DEFAULT);
	
	return $hash;
}
	
function hashEncryptVerify($input, $hash){
	
	if(password_verify($input, $hash)){
	  return true;
	}else{
	  return false;
	}
}

function dd($input) {
	var_dump($input);
	die;
}
