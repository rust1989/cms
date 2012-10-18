<?php
return array(
	//'配置项'=>'配置值'
	'APP_STATUS'=>'debug',
	'APP_FILE_CASE'=>false,
	
	'APP_GROUP_LIST'=>'App,Admin',
	'DEFAULT_GROUP'=>'App',
	'DEFAULT_MODULE'=>'Index',
	
	'DEFAULT_THEME'=>'myweb',
	'DEFAULT_TIMEZONE'=>'PRC',
	
	'DB_TYPE'=>'mysql',
	'DB_HOST'=>'localhost',
	'DB_NAME'=>'myweb',
	'DB_USER'=>'root',
	'DB_PWD'=>'123456',
	'DB_PREFIX'=>'my_',
	'DB_FIELDS_CACHE'=>false,
	'DB_DEPLOY_TYPE'=>0,
	'DB_SQL_BUILD_CACHE'=>false,
	'DB_SQL_BUILD_QUEUE'=>'file',
	
	'ERROR_MESSAGE'=>'您浏览的页面暂时发生了错误！请稍后再试～',
	
	'URL_CASE_INSENSITIVE'  => true,   // 默认false 表示URL区分大小写 true则表示不区分大小写
    'URL_MODULE'             => 2,       // URL访问模式,可选参数0、1、2、3,代表以下四种
	
	
	//网站资料
	'APP_WEBSITE'=>'弘晟官网',
	
	'APP_DESCRIPTION'=>'弘晟官网',
	
   'LOGO'=>'网站LOGO',
   
   'WEBSITE'=>'网站名称',
   
   'WEBURL'=>'网站URL',
   
   'CLOSE'=>'网站关闭',
   
   'CLOSETXT'=>'关闭原因',
	
	'APP_KEYWORDS'=>'',
	
	'TMPL_PARSE_STRING'  =>array(


     '__JS__' => '/Public/Js', // 增加新的JS类库路径替换规则
  
     '__CSS__' => '/Public/Css', // 增加新的css类库路径替换规
 
     '__IMG__' => '/Public/Images', // 增加新的img类库路径替换
	  ),
	
	 //缓存
	 
	  'TMPL_CACHE_ON'=>false,      // 默认开启模板缓存

      'TMPL_CACHE_ON'   => false,  // 默认开启模板编译缓存 false 的话每次都重新编译模板

      'ACTION_CACHE_ON'  => false,  // 默认关闭Action 缓存
      
	  'HTML_CACHE_ON'   => false,   // 默认关闭静态缓存
	  
	  //多语言
	  'LANG_SWITCH_ON' => true,   // 开启语言包功能
	  
	  'LANG_AUTO_DETECT' => true, // 自动侦测语言 开启多语言功能后有效

      'LANG_LIST'        => 'zh-cn', // 允许切换的语言列表 用逗号分隔
	  
	  'DEFAULT_LANG'    =>'zh-cn',

      'VAR_LANGUAGE'     => 'l', // 默认语言切换变量
	  
	  //上传设置
	  
	  'ATTACHSIZE'=>3145728 ,//文件大小byte
	  
	  'ATTACHEXT'=>"*.jpg;*.gif;*.png;*.jpeg;",//格式
	  
	  'ATTACH'=>'',
	  
	  'THUMBMAXWIDTH'=>'',
	  
	  'THUMBMAXHEIGHT'=>'',
	  
	  'ATTACHPATH'=>'./Uploads',
	
	
);
?>