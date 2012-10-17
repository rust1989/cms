<?php
// 本类由系统自动生成，仅供测试用途
class UploadAction extends GobalAction {
	public function __construct(){
	   parent::__construct();
	   parent::index();
	}
    public function index(){
       $this->display();
    }
	public function _list(){
	  $DB=M('attachment');
	   $list=$DB->select();
	   echo json_encode($list);
	}
	public function _upload(){
	
	  if (isset($_FILES["Filedata"]) || !is_uploaded_file($_FILES["Filedata"]["tmp_name"]) || $_FILES["Filedata"]["error"] != 0) {
			$upload_file = $_FILES['Filedata'];
			$file_info   = pathinfo($upload_file['name']);
			$file_type   = $file_info['extension'];
			$path="Uploads/".date("Ymd")."/";
			if(!is_file($path)) @mkdir($path);
			$save        = $path. md5(uniqid($_FILES["Filedata"]['name'])) . '.' . $file_info['extension'];
           
			$name        = $_FILES['Filedata']['tmp_name'];
			
			if (!move_uploaded_file($name, $save)) {
				exit;
			}
	    $DB=M('attachment');
		$DB->create();
		$DB->picpath=$save;
		$DB->add();
	 }	
	}
}