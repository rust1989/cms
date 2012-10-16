<?php
// 本类由系统自动生成，仅供测试用途
class SettingAction extends GobalAction {
	public function __construct(){
	   parent::__construct();
	   parent::index();
	}
    public function index(){
	   $DB=M('setting');
	   $list=$DB->select();
	   $this->assign('list',$list);
       $this->display();
    }
}