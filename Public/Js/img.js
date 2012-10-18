// JavaScript Document
function addbox(){
  var html='<div id=box style="display:none" ><iframe style="overflow-x:hidden; overflow-y:auto" allowtransparency="true" width="500" height="300" src="/myweb/index.php/Admin/Upload/"></iframe></div>';
  $("body").append(html);
}

function imgclick(element){
   $(element).addClass('selected');
   addbox();
   $('#box').skygqbox();						 
}
