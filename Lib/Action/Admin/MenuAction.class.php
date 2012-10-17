<?php
// 本类由系统自动生成，仅供测试用途
class MenuAction extends GobalAction {
	public function __construct(){
	   parent::__construct();
	   parent::index();
	}
	public function menu(){
	   $action=$_GET['action'];
	   $this->_list();
	   $this->assign('action',$action);
	   $this->display('Public:menu');	
	}
	public function _list(){
	   $DB=M('category');
	   $list=$DB->where('pid=0')->select();
	   $this->assign('list',$list);
	   	
	}
	
}