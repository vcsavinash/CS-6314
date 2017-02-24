$(document).ready(function() {
	$("#username").parent().append("<span class='info' id='us'>Insert uname</span>");
	$("#password").parent().append("<span class='info' id='pwd'>Insert password</span>");
	$("#email").parent().append("<span class='info' id='ema'>Insert email</span>")
	$('#us').hide();
	$('#pwd').hide();
	$('#ema').hide();
	$("#username").focus(function(){
		$('#us').show();
	});
	$("#password").focus(function(){
		$('#pwd').show();
	});
	$("#email").focus(function(){
		$('#ema').show();
	});
	$("#username").blur(function(){
        //$("span").fadeOut(2000);
			var user = $("#username").val();
			var patt2 = /^[a-zA-Z0-9]+$/g;
 			var resultuname = patt2.test(user);
			if(user==""){
				$('#us').hide(); 
 			}else if(resultuname){
				res = "<span class='ok'>Ok</span>";
			}else {
				res = "<span class='error'>Error!! Only Characters and numerals eligible</span>";
			}
			$("#username").next().html(res);
			res = "<span class='info' id='us'>Insert uname</span>";
    	});	
    
    $("#password").blur(function(){
        //$("span").fadeOut(2000);
			var pwd = $("#password").val();
			var patt3 = /^[a-zA-Z!-~]{8}/g;
 			var resultpwd = patt3.test(pwd);
			if(pwd==""){
				$('#pwd').hide(); 
 			}else if(resultpwd){
				res = "<span class='ok'>Ok</span>";
			}else {
				res = "<span class='error'>Error!! Min. 8 chars required</span>";
			}
			$("#password").next().html(res);
			res = "<span class='info' id='pwd'>Insert password</span>";
    	});	
    	
    $("#email").blur(function(){
        //$("span").fadeOut(2000);
			var email = $("#email").val();
			var patt1 = /^[a-zA-Z0-9!-~]+@[a-zA-Z]+(([.][a-z]{3})|([.][a-z]{2}[.][a-z]{2}))+$/g; 
			var resultemail = patt1.test(email);
			if(email==""){
				$('#ema').hide(); 
 			}else if(resultemail){
				res = "<span class='ok'>Ok</span>";
			}else {
				res = "<span class='error'>Error!! Email should be in abc@def.com or abc@def.co.in format</span>";
			}
			$("#email").next().html(res);
			res = "<span class='info' id='ema'>Insert email</span>";
    	});	
		
});
