<?php
// 本类由系统自动生成，仅供测试用途
class SettingAction extends GobalAction {
	public function __construct(){
	   parent::__construct();
	   parent::index();
	}
    public function index(){
       $this->display();
    }
	public function save(){
	  $DB=M('Setting');
	  $data=$_POST;
	  array_pop($data);
	  $langid=$_SESSION['LANGID'];
	  foreach($data as $key=>$val){
		$query=$DB->query("REPLACE INTO my_setting VALUES ('$key','$val',$langid)");  
	  }
	  $file='./Conf/Admin/config.php';
	  $content="<?php\r\n\$basearr=require('./Conf/config.php');\r\n\$orignarr=array(\r\n";
	  $list=$DB->select();
	  foreach($list as $key=>$val){
		  $content.="'$val[name]'"."=>'".$val['val']."',\r\n";
	  }
      $content.="\r\n);\r\nreturn array_merge(\$basearr,\$orignarr);\r\n?>";
	  $r=chmod($file,0777);
	  $hand=file_put_contents($file,$content);
	  if(!$hand) $this->error($file."配置写入错误");
	  $this->success("",__URL__.'/index');
    }
   public function banner(){
	  $DB=M('banner'); 
	  $langid=$_SESSION['LANGID'];
	  $list=$DB->select(array('langid'=>$langid));
	  
	  $this->assign('banner_1',$list[0]['picpath']);
	  $this->assign('banner_2',$list[1]['picpath']);
	  $this->display();   
   }
   public function savebanner(){
	 $DB=M('banner');
	 $langid=$_SESSION['LANGID'];
	 $data=$_POST;
	 array_pop($data);
	 array_pop($data);
	 
	 foreach($data as $key=>$val){
	 $query=$DB->query("REPLACE INTO my_banner VALUES ('$key','$val',$langid)");
	 }
	 $this->success("","banner");
   }
}