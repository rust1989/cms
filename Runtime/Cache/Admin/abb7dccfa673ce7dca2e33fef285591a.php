<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title><?php echo L('SYSTEM');?></title>
<style>
body
{
  scrollbar-base-color:#C0D586;
  scrollbar-arrow-color:#FFFFFF;
  scrollbar-shadow-color:DEEFC6;
}
</style>
</head>
<frameset rows="76,*" cols="*" frameborder="no" border="0" framespacing="0">
  <frame src="__URL__/top" name="topFrame" scrolling="no">
  <frameset cols="180,*" name="btFrame" frameborder="NO" border="0" framespacing="0">
    <frame src="__URL__/menu" noresize name="menu" scrolling="no">
    <frame src="__URL__/main" noresize name="main" scrolling="auto">
  </frameset>
</frameset>
<noframes>
	<body>您的浏览器不支持框架！</body>
</noframes>
</html>