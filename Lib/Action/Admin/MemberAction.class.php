<?php
// 本类由系统自动生成，仅供测试用途
class MemberAction extends GobalAction {
	public function __construct(){
	   parent::__construct();
	   parent::index();
	}
    public function index(){
       $this->display();
    }
}