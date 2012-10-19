<?php
// 本类由系统自动生成，仅供测试用途
class ChannelAction extends GobalAction {
	public function __construct(){
	   parent::__construct();
	   parent::index();
	}
    public function index(){
	   $DB=M('category');
	   $list=$DB->select();
	   $this->assign('list',$list);
       $this->display();
    }
	
	public function add(){
		$this->_module();
	   $this->display();	
	}
	public function save(){
		$DB=M('category');
		
		$DB->create();
		$DB->position=implode(",",$_POST['position']);
		if(empty($_POST['id']))
   		$query=$DB->add();
		else{
		
		$query=$DB->save();
		}
		$this->success("","index");
	}
	public function edit(){
	  $module=$this->_module();
	  $this->assign('module',$module);
	  $id=isset($_GET['id'])?$_GET['id']:'';
	  if(empty($id)) $this->error();
	  $DB=M('category');
	  $list=$DB->where(array('id'=>$id))->find();
	  $list['position']=explode(",",$list['position']);
	  $this->assign('list',$list);
	  $this->display('add');
	}
	private function _module(){
	    $DB=M('module');
		$module=$DB->select();
		return $module;
	}
	
}