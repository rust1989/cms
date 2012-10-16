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
'DB_TYPE'=>'',
'DB_HOST'=>'',
'DB_NAME'=>'',
'DB_USER'=>'',
'DB_PWD'=>'',
'DB_PREFIX'=>'',
'DB_FIELDS_CACHE'=>'',
'submit'=>'',
'WEBURL'=>'网站URL',

);
return array_merge($basearr,$orignarr);
?>