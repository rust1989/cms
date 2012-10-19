<?php
// 本类由系统自动生成，仅供测试用途
class UploadAction extends GobalAction {
	public function __construct(){
	   parent::__construct();
	   parent::index();
	}
    public function index(){
	   $DB=M('attachment_cateory');
	   $list=$DB->select();
	   $this->assign('list',$list);
	   $this->display();	
    }
	public function _list(){
	   $cid=$_GET['cid'];
	   if(!empty($cid)) $where=array('cid'=>$cid);	

	   $last=isset($_GET['last'])?$_GET['last']:'';
	   $DB=M('attachment');
	   if($last=='last')
	   $list=$DB->where($where)->order('id desc')->limit(1)->select();
	   else
	   $list=$DB->where($where)->select();
	   if(empty($list))die('false');
	   echo json_encode($list);
	}
	public function _upload(){
	
	  if (isset($_FILES["Filedata"]) || !is_uploaded_file($_FILES["Filedata"]["tmp_name"]) || $_FILES["Filedata"]["error"] != 0) {
			$upload_file = $_FILES['Filedata'];
			$file_info   = pathinfo($upload_file['name']);
			$file_type   = $file_info['extension'];
			$path="/Uploads/".date("Ymd")."/";
			if(!is_file($path)) @mkdir($path);
			$pname=md5(uniqid($_FILES["Filedata"]['name'])) . '.' . $file_info['extension'];
			$save        = $path.$pname;
           
			$name        = $_FILES['Filedata']['tmp_name'];
			
			if (!move_uploaded_file($name, $save)) {
				exit;
			}
	    $DB=M('attachment');
		$DB->create();
		$DB->picpath=$save;
		$DB->cid=$_GET['cid'];
		$DB->name=$pname;
		$DB->add();
	 }	
	}
	public function del(){
	  $id=isset($_GET['id'])?$_GET['id']:'';
	  if(!is_numeric($id)) $this->error("",__URL__.'/index');
	  $DB=M('attachment');
	  $list=$DB->where(array('id'=>$id))->find();
	  $this->delImg($list['picpath']);
	  $query=$DB->where(array('id'=>$id))->delete();
	  $this->display('index');
	}
	public function add(){
	  	$this->display();
	}
	public function save(){
		$DB=M('attachment_cateory');
		$DB->create();
		$query=$DB->add();
		$this->_jump($query,"index");
	}
	
}