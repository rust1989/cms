<?php
class ImgAction extends GobalAction{
    public function __construct(){
	   parent::__construct();
	   parent::index();	
	}	
 	public function index(){
	   $DB=M('Img');
	   $list=$DB->select();
	   $this->assign('list',$list);
	   $this->display();	
	}
	public function add(){
		$this->_procates();
	   $this->display();	
	}
	public function save(){
		$DB=M('Img');
		$DB->create();
		if(empty($_POST['id'])){
		$DB->date=time();
		$DB->langid=$_SESSION['LANGID'];
	   	$DB->add();
		}else 
		$DB->save();
		$this->success("","index");
	}
	public function procates(){
		
	   $this->_procates();
	   $this->display();	
	}
	
	public function savesort(){
		$DB=M('procates');
		$DB->create();
		if(empty($_POST['id'])){
		$mid=$this->_cid();
		$DB->cid=$mid;
		$DB->langid=$_SESSION['LANGID'];
	   	$DB->add();
		}else 
		$DB->save();
		$this->success("","procates");
	}
	public function addsort(){
		$id=isset($_GET['id'])?$_GET['id']:'';
		if(!empty($id)){
	    $DB=M('procates');
	    $list=$DB->where(array('id'=>$id))->find();
	    $this->assign('list',$list);
		}
		$this->_procates();
	    $this->display();
	}
	public function addchild(){
		$id=isset($_GET['id'])?$_GET['id']:'';
		if(empty($id)) $this->error();
	   $this->_procates();
	   $this->assign('id',$id);
	   $this->display('addsort');	
	}
	private function _procates(){
		$DB=M('procates');
		$mid=$this->_cid();
	    $procates=$DB->where(array('pid'=>0,'cid'=>$mid))->select();
		$procateschild=$DB->where("pid!=0 and cid=$mid")->select();
	    $this->assign('procates',$procates);
	    $this->assign('procateschild',$procateschild);
	}
	private function _cid(){
	    $m=MODULE_NAME;
		$mlist=M('category')->where(array('module'=>$m))->find();
		$mid=$mlist['id'];
		return $mid;	
	}
}
?>