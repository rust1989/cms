<?php
// 本类由系统自动生成，仅供测试用途
class MemberAction extends GobalAction {
	public function __construct(){
	   parent::__construct();
	   parent::index();
	}
	
    public function index(){
	   $DB=M('member_role');
	   $list=$DB->select();
	   $this->assign('list',$list);	
       $this->display();
    }
	public function Manager(){
		$DB=M('admin');
	   $list=$DB->select();
	   $this->assign('list',$list);
       $this->display();
   }
    public function addrole(){
	  $id=isset($_GET['id'])?$_GET['id']:'';
	  if(!empty($id)){
	   $DB=M('member_role');
	   $list=$DB->where(array('tid'=>$id))->find();
	   $this->assign('list',$list);
      }
	  $this->display();
   }
    public function saverole(){
	 $id=isset($_POST['tid'])?$_POST['tid']:'';
	 $DB=M('member_role');
	 $DB->create();
	 if(!empty($_POST['permission']))
	 $DB->permission=implode(",",$_POST['permission']);
     if(!empty($id)){
		$query=$DB->save(); 
	 }else{
	    $query=$DB->add();	 
	 }
	 if($query) $this->success("",__URL__.'/index');
     else $this->error("",__URL__.'/index');
   }
   public function editrole(){
	  $id=isset($_GET['id'])?$_GET['id']:'';
	  if(empty($id)) $this->error();
	  $DB=M('member_role');
	  $list=$DB->where(array('tid'=>$id))->find();
	  $this->assign('list',$list);
	  $this->display('addrole');   
   }
   public function permission(){
	  $id=isset($_GET['id'])?$_GET['id']:'';
	  if(empty($id)) $this->error(); 
	  $DB=M('member_role');
	  $arr=$DB->where(array('tid'=>$id))->find();
	  $permission=explode(",",$arr['permission']);
	  $this->assign('tid',$arr['tid']);
	  $this->assign('permission',$permission);
	  $CATE=M('category');
	  $list=$CATE->select();
	  $this->assign('list',$list);
	  $this->display();   
   }
   public function add(){
	  $id=isset($_GET['id'])?$_GET['id']:'';
	  if(!empty($id)){
	   $DB=M('admin');
	   $list=$DB->where(array('id'=>$id))->find();
	   $this->assign('list',$list);
      }
	  $this->display();
   }
   public function save(){
	 $id=isset($_POST['id'])?$_POST['id']:'';
	 $DB=M('admin');
	 $DB->create();
     $DB->pwd=md5($_POST['pwd']);
	 $DB->logtime=time();
     if(!empty($id)){
		$query=$DB->save(); 
	 }else{
	    $query=$DB->add();	 
	 }
	 if($query) $this->success("",__URL__.'/Manager');
     else $this->error("",__URL__.'/Manager');
   }
   public function del(){
		$id=isset($_GET['id'])?$_GET['id']:'';
		
		if(empty($id)) $this->error();
		$DB=M('member_role');
		$query=$DB->where(array('tid'=>$id))->delete();
		$this->_jump($query);
	}
	public function user(){
	   $this->display('index');	
	}
}