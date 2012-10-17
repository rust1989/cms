// JavaScript Document

$(function(){
  var html="<div id=box style='display:none' ><iframe scrolling='no' allowtransparency='true' width='700' height='300'src='/myweb/swfupload/demo/index.php'></iframe></div>";
  $("body").append(html);
});


$("#img").click(function(){
   $('#box').skygqbox();						 
});