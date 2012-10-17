<?php
$basearr=require('./Conf/config.php');
$orignarr=array(
'LOGO'=>'网站LOGO',
'WEBSITE'=>'网站名称',
'CLOSE'=>'网站关闭',
'CLOSETXT'=>'关闭原因',
'ATTACHSIZE'=>'',
'ATTACHEXT'=>'',
'THUMBMAXWIDTH'=>'',
'THUMBMAXHEIGHT'=>'',
'ATTACHPATH'=>'',
'submit'=>'',
'WEBURL'=>'网站URL',
'ATTACHEXT'=>"*.jpg;*.gif;*.png;*.jpeg;",//格式

);
return array_merge($basearr,$orignarr);
?>