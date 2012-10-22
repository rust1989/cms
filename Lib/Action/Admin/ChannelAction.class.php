<?php
// 本类由系统自动生成，仅供测试用途
class ChannelAction extends GobalAction {
	public function __construct(){
	   parent::__construct();
	   parent::index();
	}
    public function index(){
	   $this->_category();
       $this->display();
    }
	
	public function add(){
		$this->_module();
		$this->_category();
	   $this->display();	
	}
	public function addchild(){
		$id=isset($_GET['id'])?$_GET['id']:'';
		if(empty($id)) $this->error();
		
		$this->assign('id',$id);
		$DB=M('category');
		$arr=$DB->where(array('id'=>$id))->find();
		$this->assign('moduleval',$arr['module']);
	    $this->_module();
		$this->_category();
		$this->display('add');	
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
	 
	  $id=isset($_GET['id'])?$_GET['id']:'';
	  if(empty($id)) $this->error();
	  $DB=M('category');
	  $list=$DB->where(array('id'=>$id))->find();
	  $pid=$list['pid'];
	  $list['position']=explode(",",$list['position']);
	  $this->assign('listc',$list);
	  $this->assign('id',$pid);
	   $this->_module();
	  $this->_category();
	  $this->display('add');
	}
	private function _module(){
	    $DB=M('module');
		$module=$DB->select();
		$this->assign('module',$module);
	}
	private function _category(){
	   $DB=M('category');
	   $list=$DB->where('pid=0')->select();
	   $child=$DB->where('pid!=0')->select();
	   $this->assign('child',$child);
	   $this->assign('list',$list);	
	}
	public function del(){
		$id=isset($_GET['id'])?$_GET['id']:'';
		
		if(empty($id)) $this->error();
		$DB=M('category');
		$query=$DB->where(array('id'=>$id))->delete();
		$this->_jump($query);
	}
	
}