<?php if (!defined('THINK_PATH')) exit();?>﻿<html>
<head>
<title>menu</title>
<link rel="stylesheet" href="<?php echo APP_TMPL_PATH;?>skin/css/base.css" type="text/css" />
<link rel="stylesheet" href="<?php echo APP_TMPL_PATH;?>skin/css/menu.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<script language='javascript'>var curopenItem = '1';</script>
<script type="text/javascript" src="__JS__/jquery.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo APP_TMPL_PATH;?>skin/js/frame/menu.js"></script>
<base target="main" />
</head>
<body target="main">
<table width='100%' height="100%" border='0' cellspacing='0' cellpadding='0'>
  <tr>
    <td style='padding-left:3px;padding-top:8px' valign="top">
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['pid'] == 0): ?><!-- Item 1 End -->
      <!-- Item 2 Strat -->
      <dl id="<?php echo ($vo["module"]); ?>" class='bitem'>
        <dt onClick='showHide("items<?php echo ($i); ?>_1")'><b><?php echo ($vo["title"]); ?></b></dt>
        <dd style='display:block' class='sitem' id='items<?php echo ($i); ?>_1'>
          <ul class='sitemu'>
            <li><a href='__GROUP__/<?php echo ($vo["module"]); ?>' target='main'><?php echo ($vo["title"]); ?></a></li>
            <?php if(is_array($clist)): $i = 0; $__LIST__ = $clist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$jo): $mod = ($i % 2 );++$i; if($jo['pid'] == $vo['id']): ?><li><a href='__GROUP__/<?php echo ($jo["module"]); ?>/<?php echo ($jo["action"]); ?>' target='main'><?php echo ($jo["title"]); ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
          </ul>
        </dd>
      </dl><?php endif; endforeach; endif; else: echo "" ;endif; ?>

	  </td>
  </tr>
</table>
<script type="text/javascript">
  $(".bitem").hide();
  var name="<?php echo $_GET['action'];?>";
  $("#"+name+"").show().siblings().hide();
</script>
</body>
</html>