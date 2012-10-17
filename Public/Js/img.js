// JavaScript Document

$(function(){
  var html='<div id=box style="display:none" ><iframe style="overflow-x:hidden; overflow-y:auto" allowtransparency="true" width="500" height="300" src="/index.php/Admin/Upload/"></iframe></div>';
  $("body").append(html);
});


$("#img").click(function(){
   $('#box').skygqbox();						 
});