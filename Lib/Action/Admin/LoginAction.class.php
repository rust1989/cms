<?php
// 本类由系统自动生成，仅供测试用途
class LoginAction extends GobalAction {
	public function __construct(){
	  parent::__construct();
	}
    public function index(){
		
		if($_SESSION['STATUS']==true)
	   $this->redirect('Index/index');
       $this->display();
    }
	public function checklogin(){
		$seccode=md5($_POST['seccode']);
		if($_SESSION['verify']!==$seccode)
		$this->error(L('VERIFYERROR'),'index');
		$username=$_POST['username'];
		$pwd=md5($_POST['password']);
		
		$DB=M('admin');
		$list=$DB->where("user='".$username."'")->find();
	    if($list){
			if($pwd!=$list['pwd']){
			$this->error(L('LogError'),'index');		
		    }
			$_SESSION['USER']=$username;
			$_SESSION['STATUS']=true;
			$_SESSION['LANGID']=1;
			$logtime=time();
			//$logip=$this->ip();
			$data=array(
			  'logtime'=>$logtime,
			  'logip'=>$logip
			);
			$DB->where(array('id'=>$list['id']))->save($data);
			$this->redirect('Index/index');
		}else{
		  $this->error(L('LogError'),'index');	
		}
	}
	public function verify(){
	  import('ORG.Util.Image');
	  Image::buildImageVerify();	
	}
	public function logout(){
	   unset($_SESSION['STATUS']);
	   unset($_SESSION['USER']);
	   unset($_SESSION['LANGID']);
	
	   $this->redirect('index');	
	}
}