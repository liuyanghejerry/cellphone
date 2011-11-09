if(!window.sessionStorage){
 alert('您的浏览器不支持会话存储功能，将可能导致部分功能失效。');
}

sessionStorage.inputnum1 = 'empty';
sessionStorage.inputnum2 = 'empty';
$("#phone_number").live('click tap',function(){
	sessionStorage.inputbox = "phone_number";
	$.mobile.changePage( "numpad", {
		type: "get", 
		role: 'dialog'
	});
});

$("#phone_number_again").live('click tap',function(){
	sessionStorage.inputbox = "phone_number_again";
	$.mobile.changePage( "numpad", {
		type: "get", 
		role: 'dialog'
	});
});

$("#pad_ok").live('click tap',function(){
	$('#numberpad').dialog('close');
	if(sessionStorage.inputbox=='phone_number'){
		sessionStorage.inputnum1 = $("#numberbox").val();
	}else if(sessionStorage.inputbox=='phone_number_again'){
		sessionStorage.inputnum2 = $("#numberbox").val();
	}
});

$("#recharge").live('pageshow', function() {
	if(sessionStorage.inputnum1!='empty')$("#phone_number").val(sessionStorage.inputnum1);
	if(sessionStorage.inputnum2!='empty')$("#phone_number_again").val(sessionStorage.inputnum2);
});

$("#recharge").live('pagebeforehide', function() {
	$("#phone_number").val("");
	$("#phone_number_again").val("");
});

$(".numbers").live('click tap',function(){
	$("#numberbox").val($("#numberbox").val()+$(this).children('span').children('span').html());
});

$("#del").live('click tap',function(){
	$("#numberbox").val($("#numberbox").val().slice(0,-1));
});

$("#reset").live('click tap',function(){
	$("#numberbox").val('');
});