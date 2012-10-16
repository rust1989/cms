<?php
/*
字符串处理
*/  
function dhtml($arr){
	if(is_array($arr)){
	  foreach($arr as $key=>$val){
		  $arr[$key]=$this->dhtml($val);
	  }
	}else{
	   	$arr=htmlspecialchars($arr);
	}
	return $arr;
}
/*
获取IP
*/
function ip(){
 if(!empty($_SERVER["HTTP_X_FORWARED_FOR"])){
	$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
 }else if(!empty($_SERVER['HTTP_CLIENT_IP'])){
	$ip=$_SERVER['HTTP_CLIENT_IP'];
 }else if(!empty($_SERVER['REMOTE_ADDR'])){
	$ip=$_SERVER['REMOTE_ADDR']; 
 }else if(getenv('HTTP_X_FORWARED_FOR')){
   	$ip=getenv('HTTP_X_FORWARD_FOR');
 }else if(getenv('HTTP_CLIENT_IP')){
	 $ip=getenv('HTTP_CLIENT_IP');
 }else if(getenv('REMOTE_ADDR')){
	$ip=getenv('REMOTE_ADDR');
 }else{
    $ip='Unknow';	 
 }		
  return $ip;	
}
/*跳转*/
function _jump($query,$url=''){
	  $url=isset($url)?$url:"index";
	  if($query){
		 $this->success($url);  
	  }else{
		 $this->error($url);
	  }	
	}
?>