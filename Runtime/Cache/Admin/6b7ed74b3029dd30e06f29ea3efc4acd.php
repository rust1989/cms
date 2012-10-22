<?php if (!defined('THINK_PATH')) exit();?>﻿<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>文档管理</title>
<link rel="stylesheet" type="text/css" href="<?php echo APP_TMPL_PATH;?>skin/css/base.css">

</head>
<body leftmargin="8" topmargin="8">
<!--<!--  快速转换位置按钮  -->
<table width="98%" border="0" cellpadding="0" cellspacing="1"  align="center">
<tr>
 <td height="26">
  <table width="98%" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td align="center" >
    <input type='button' class="coolbg np" onClick="location='__URL__/index';" value='网站设置' />
    <input type='button' class="coolbg np" onClick="location='__URL__/database';" value='数据库设置' />
    <input type='button' class='coolbg np' onClick="location='__URL__/image';" value='图片上传设置' />
     <input type='button' class="coolbg np" onClick="location='__URL__/cache';" value='缓存设置' />
    <input type='button' class="coolbg np" onClick="location='__URL__/lang';" value='语言设置' />
    <input type='button' class="coolbg np" onClick="location='__URL__/banner';" value='广告设置' />

 </td>
 </tr>
</table>
</td>
</tr>
</table>

  
<!--  内容列表   -->
<form name="form2" action="__URL__/save" method="post">

<table width="98%" border="0" cellpadding="2" cellspacing="1" bgcolor="#D1DDAA" align="center" style="margin-top:8px">
<tr bgcolor="#E7E7E7">
	<td height="24" colspan="10">&nbsp;网站设置&nbsp;</td>
</tr>

<tr align='center' bgcolor="#FFFFFF" onMouseMove="javascript:this.bgColor='#FCFDEE';" onMouseOut="javascript:this.bgColor='#FFFFFF';" height="22" >
	<td width="30%"><?php echo L('LOGO');?></td>
	<td align="left">
       <div id="img" onClick="imgclick(this);"><img src="/<?php echo C('LOGO');?>" height="50" >
       <input type="hidden" name="LOGO" id="img_hid" value="<?php echo C('LOGO');?>">
       </div>
    </td>
</tr>
<tr align='center' bgcolor="#FFFFFF" onMouseMove="javascript:this.bgColor='#FCFDEE';" onMouseOut="javascript:this.bgColor='#FFFFFF';" height="22" >
	<td width="30%"><?php echo L('WEBSITE');?></td>
	<td align="left">
       <input type="text" name="WEBSITE" id="WEBSITE" value="<?php echo C('WEBSITE');?>">
    </td>
</tr>
<tr align='center' bgcolor="#FFFFFF" onMouseMove="javascript:this.bgColor='#FCFDEE';" onMouseOut="javascript:this.bgColor='#FFFFFF';" height="22" >
	<td width="30%"><?php echo L('WEBURL');?></td>
	<td align="left">
       <input type="text" name="WEBURL" id="WEBURL" value="<?php echo C('WEBURL');?>">
    </td>
</tr>
<tr align='center' bgcolor="#FFFFFF" onMouseMove="javascript:this.bgColor='#FCFDEE';" onMouseOut="javascript:this.bgColor='#FFFFFF';" height="22" >
	<td width="30%"><?php echo L('CLOSE');?></td>
	<td align="left">
       <input type="text" name="CLOSE" id="CLOSE" value="<?php echo C('CLOSE');?>">
    </td>
</tr>
<tr align='center' bgcolor="#FFFFFF" onMouseMove="javascript:this.bgColor='#FCFDEE';" onMouseOut="javascript:this.bgColor='#FFFFFF';" height="22" >
	<td width="30%"><?php echo L('CLOSETXT');?></td>
	<td align="left">
       <textarea id="CLOSETXT" name="CLOSETXT" id="CLOSETXT"><?php echo C('CLOSETXT');?></textarea>
    </td>
</tr>
<tr align="right" bgcolor="#EEF4EA">
	<td height="36"  colspan="2" align="center"><!--翻页代码 --><input name="submit"  type="submit" value="" class="submit"  /></td>
</tr>
</table>

</form>

<script type="text/javascript" src="__JS__/jquery.js"></script>
<script type="text/javascript" src="__JS__/skygqbox.js"></script>
<script type="text/javascript" src="__JS__/img.js"></script>

</body>
</html>