<?php if (!defined('THINK_PATH')) exit();?>﻿<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>文档管理</title>
<link rel="stylesheet" type="text/css" href="<?php echo APP_TMPL_PATH;?>skin/css/base.css">

</head>
<body leftmargin="8" topmargin="8" background='skin/images/allbg.gif'>
  
<!--  内容列表   -->
<form name="form2" action="__URL__/save" method="post">

<table width="60%" border="0" cellpadding="2" cellspacing="1" bgcolor="#D1DDAA" align="center" style="margin-top:8px">
<tr bgcolor="#E7E7E7">
	<td height="24" colspan="10" background="skin/images/tbg.gif">&nbsp;网站设置&nbsp;</td>
</tr>

<tr align='center' bgcolor="#FFFFFF" onMouseMove="javascript:this.bgColor='#FCFDEE';" onMouseOut="javascript:this.bgColor='#FFFFFF';" height="22" >
	<td width="30%"><?php echo L('BANNER');?></td>
	<td align="left">
       <div id="img" onClick="imgclick(this);"><img src="/<?php echo C('LOGO');?>" height="50" >
        <input type="hidden" name="LOGO" id="img_hid" value="<?php echo C('LOGO');?>">
       </div>
      
    </td>
</tr>
<tr align='center' bgcolor="#FFFFFF" onMouseMove="javascript:this.bgColor='#FCFDEE';" onMouseOut="javascript:this.bgColor='#FFFFFF';" height="22" >
	<td width="30%"><?php echo L('BANNER');?></td>
	<td align="left">
       <div id="img" onClick="imgclick(this);"><img src="/<?php echo C('LOGO');?>" height="50" >
       <input type="hidden" name="LOGO" id="img_hid" value="<?php echo C('LOGO');?>">
       </div>
       
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