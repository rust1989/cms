<?php if (!defined('THINK_PATH')) exit();?>﻿<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>文档管理</title>
<link rel="stylesheet" type="text/css" href="<?php echo APP_TMPL_PATH;?>skin/css/base.css">
</head>
<body leftmargin="8" topmargin="8" background='skin/images/allbg.gif'>

<!--  内容列表   -->
<form name="form2" action="__URL__/save" method="post">

<table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#D1DDAA" align="center" style="margin-top:8px">
<tr bgcolor="#E7E7E7">
	<td height="24" colspan="10" background="skin/images/tbg.gif">&nbsp;网站栏目&nbsp;</td>
</tr>

<tr align='center' bgcolor="#FFFFFF" onMouseMove="javascript:this.bgColor='#FCFDEE';" onMouseOut="javascript:this.bgColor='#FFFFFF';" height="22" >
	<td width="30%"><?php echo L('NAME');?></td>
	<td align="left">
       <input type="text" name="title" id="title" value="<?php echo ($listc["title"]); ?>">
       <input type="hidden" name="id" id="id" value="<?php echo ($listc["id"]); ?>">
    </td>
</tr>
<?php if($listc['pid'] != 0 or $id): ?><tr align='center' bgcolor="#FFFFFF" onMouseMove="javascript:this.bgColor='#FCFDEE';" onMouseOut="javascript:this.bgColor='#FFFFFF';" height="22" >
	<td width="30%"><?php echo L('MODULE').L('NAME');?></td>
	<td align="left">
         <input type="text" name="action" id="action" value="<?php echo ($listc["action"]); ?>">
         <input type="hidden" name="module" id="module" value="<?php echo ($moduleval); ?>">
    </td>
</tr>
<?php else: ?>
<tr align='center' bgcolor="#FFFFFF" onMouseMove="javascript:this.bgColor='#FCFDEE';" onMouseOut="javascript:this.bgColor='#FFFFFF';" height="22" >
	<td width="30%"><?php echo L('MODULE').L('NAME');?></td>
	<td align="left">
         <input type="text" name="module" id="module" value="<?php echo ($listc["module"]); ?>">
    </td>
</tr><?php endif; ?>
<tr align='center' bgcolor="#FFFFFF" onMouseMove="javascript:this.bgColor='#FCFDEE';" onMouseOut="javascript:this.bgColor='#FFFFFF';" height="22" >
	<td width="30%"><?php echo L('MODULE');?></td>
	<td align="left">
       <select id="mid" name="mid">
        <option value="">--栏目类型--</option>
        <?php if(is_array($module)): $i = 0; $__LIST__ = $module;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["mid"]); ?>" <?php if($listc['mid'] == $vo['mid']): ?>selected='selected'<?php endif; ?>><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
       </select>
    </td>
</tr>

<tr align='center' bgcolor="#FFFFFF" onMouseMove="javascript:this.bgColor='#FCFDEE';" onMouseOut="javascript:this.bgColor='#FFFFFF';" height="22" >
	<td width="30%"><?php echo L('CLASS');?></td>
	<td align="left">
       <select id="pid" name="pid">
        <option value="0">--作为一级栏目--</option>
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" <?php if($id == $vo['id']): ?>selected='selected'<?php endif; ?>><?php echo ($vo["title"]); ?></option>
             <?php if(is_array($child)): $i = 0; $__LIST__ = $child;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$jo): $mod = ($i % 2 );++$i; if($jo['pid'] == $vo['id']): ?><option value="<?php echo ($jo["id"]); ?>" <?php if($id == $jo['id']): ?>selected='selected'<?php endif; ?>>&nbsp;&nbsp;<?php echo ($jo["title"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
       </select>
    </td>
</tr>
<tr align='center' bgcolor="#FFFFFF" onMouseMove="javascript:this.bgColor='#FCFDEE';" onMouseOut="javascript:this.bgColor='#FFFFFF';" height="22" >
	<td width="30%"><?php echo L('SHOW');?></td>
	<td align="left">
       <input type="radio" name="show" id="show_1" value="1" <?php if($listc['show'] == 1): ?>checked='checked'<?php endif; ?>>true
       <input type="radio" name="show" id="show_2" value="0" <?php if($listc['show'] == 0): ?>checked='checked'<?php endif; ?>>false
    </td>
</tr>
<tr align='center' bgcolor="#FFFFFF" onMouseMove="javascript:this.bgColor='#FCFDEE';" onMouseOut="javascript:this.bgColor='#FFFFFF';" height="22" >
	<td width="30%"><?php echo L('POSITION');?></td>
	<td align="left">
       <input type="checkbox" name="position[]" id="position1" value="0" <?php if(in_array(0,$listc['position'])): ?>checked='checked'<?php endif; ?>>头部
       <input type="checkbox" name="position[]" id="position2" value="1" <?php if(in_array(1,$listc['position'])): ?>checked='checked'<?php endif; ?>>底部
    </td>
</tr>

<tr align="right" bgcolor="#EEF4EA">
	<td height="36"  colspan="2" align="center"><!--翻页代码 --><input name="submit"  type="submit" value="" class="submit"  /></td>
</tr>
</table>

</form>

</body>
</html>