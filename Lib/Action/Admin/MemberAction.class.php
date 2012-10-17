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
	public function Manager(){
		$DB=M('admin');
	   $list=$DB->select();
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
}