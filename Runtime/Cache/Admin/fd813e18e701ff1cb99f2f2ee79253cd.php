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
	<td height="24" colspan="10">&nbsp;缓存设置&nbsp;</td>
</tr>

<tr align='center' bgcolor="#FFFFFF" onMouseMove="javascript:this.bgColor='#FCFDEE';" onMouseOut="javascript:this.bgColor='#FFFFFF';" height="22" >
	<td width="30%"><?php echo L('TMPL_CACHE_ON');?></td>
	<td align="left">
       <input type="radio" name="TMPL_CACHE_ON" id="TMPL_CACHE_ON_1" value="true" <?php if(C('TMPL_CACHE_ON') == true): ?>checked='checked'<?php endif; ?>>true
       <input type="radio" name="TMPL_CACHE_ON" id="TMPL_CACHE_ON_2" value="false" <?php if(C('TMPL_CACHE_ON') == false): ?>checked='checked'<?php endif; ?>>false       
    </td>
</tr>

<tr align='center' bgcolor="#FFFFFF" onMouseMove="javascript:this.bgColor='#FCFDEE';" onMouseOut="javascript:this.bgColor='#FFFFFF';" height="22" >
	<td width="30%"><?php echo L('ACTION_CACHE_ON');?></td>
	<td align="left">
       <input type="radio" name="ACTION_CACHE_ON" id="ACTION_CACHE_ON_1" value="true" <?php if(C('ACTION_CACHE_ON') == true): ?>checked='checked'<?php endif; ?>>true
       <input type="radio" name="ACTION_CACHE_ON" id="ACTION_CACHE_ON_2" value="false" <?php if(C('ACTION_CACHE_ON') == false): ?>checked='checked'<?php endif; ?>>false
    </td>
</tr>
<tr align='center' bgcolor="#FFFFFF" onMouseMove="javascript:this.bgColor='#FCFDEE';" onMouseOut="javascript:this.bgColor='#FFFFFF';" height="22" >
	<td width="30%"><?php echo L('HTML_CACHE_ON');?></td>
	<td align="left">
       <input type="radio" name="HTML_CACHE_ON" id="HTML_CACHE_ON_1" value="true" <?php if(C('HTML_CACHE_ON') == true): ?>checked='checked'<?php endif; ?>>true
       <input type="radio" name="HTML_CACHE_ON" id="HTML_CACHE_ON_2" value="false" <?php if(C('HTML_CACHE_ON') == false): ?>checked='checked'<?php endif; ?>> false
       
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