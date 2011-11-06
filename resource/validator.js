$("#recharge").live('pageshow', function() {
		$("#recharge-form").validate({
		rules: {
			phone_number: {
				required: true,
				maxlength: 11,
				minlength: 11,
				number: true
			},
			phone_number_again: {
				required: true,
				maxlength: 11,
				minlength: 11,
				number: true,
				equalTo: "#phone_number"
			}
		},
		messages: {
			phone_number: {
				required: "请输入所要充值的手机号码",
				minlength: "手机号码需写满11位",
				maxlength: "手机号码至多11位",
				number:"手机号码应仅包含数字"
			},
			phone_number_again: {
				required: "请再输入一次手机号码",
				maxlength: "手机号码至多11位",
				minlength: "手机号码需写满11位",
				equalTo:"您的号码与上面填写的不同",
				number:"手机号码应仅包含数字"
			},
		}
	});
});
