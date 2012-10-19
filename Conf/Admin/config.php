<?php
$basearr=require('./Conf/config.php');
$orignarr=array(
'LOGO'=>'Uploads/20121018/03ff8ef80bb4ff4bed6d1b5eb32fe029.jpg',
'WEBSITE'=>'网站名称',
'CLOSE'=>'网站关闭',
'CLOSETXT'=>'关闭原因',
'ATTACHSIZE'=>'3145728',
'ATTACHEXT'=>'*.jpg;*.gif;*.png;*.jpeg;',
'THUMBMAXWIDTH'=>'500',
'THUMBMAXHEIGHT'=>'500',
'ATTACHPATH'=>'./Uploads',
'DB_HOST'=>'localhost',
'DB_NAME'=>'myweb',
'DB_USER'=>'root',
'DB_PWD'=>'123456',
'DB_PREFIX'=>'my_',
'TMPL_CACHE_ON'=>'true',
'WEBURL'=>'网站URL',
'ACTION_CACHE_ON'=>'true',
'HTML_CACHE_ON'=>'true',
'banner_1'=>'Uploads/20121018/03ff8ef80bb4ff4bed6d1b5eb32fe029.jpg',
'banner_2'=>'Uploads/20121018/b02e4dc444ef7b7aa9802ca6a7f440dc.jpg',

);
return array_merge($basearr,$orignarr);
?>