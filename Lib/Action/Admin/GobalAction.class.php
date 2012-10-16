<?php
// 本类由系统自动生成，仅供测试用途
class GobalAction extends Action {
	public function __constuct(){
	  parent::__construct();	
	}
    public function index(){
	     if($_SESSION['STATUS']!=true)
	     $this->redirect('Login/index');	
    }
	public function checklogin(){
		
	}
}