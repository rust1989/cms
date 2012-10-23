<?php
class ProductAction extends GobalAction{
    public function __construct(){
	   parent::__construct();
	   parent::index();	
	}	
 	public function index(){
	   $DB=M('product');
	   $list=$DB->select();
	   $this->assign('list',$list);
	   $this->display();	
	}
	public function add(){
	   $this->display();	
	}
	public function procates(){
	   $this->_procates();
	   
	   $this->display();	
	}
	public function savesort(){
		$DB=M('procates');
		$DB->create();
		if(empty($_POST['id']))
	   	$DB->add();
		else 
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
	    $procates=$DB->where('pid=0')->select();
		$procateschild=$DB->where('pid!=0')->select();
	    $this->assign('procates',$procates);
	    $this->assign('procateschild',$procateschild);
	}
}
?>