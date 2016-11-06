	function ValidationPatterns (){
		this.ck_name = /^[A-Za-z0-9_]{5,20}$/;
		this.ck_address= /^.{20,999}$/;
		this.ck_echo= /^(.|\n){40,128}$/;
		this.ck_message= /^(.|\n){20,1023}$/;
		this.ck_subject= /^.{14,128}$/;
		this.ck_refKey= /^[A-Za-z0-9_]{4,32}$/;
		this.ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i 
		this.ck_password =  /^[A-Za-z0-9!~@#$%^&amp;*()_]{6,20}$/;
		this.ck_phone = /^[0-9-]{10,20}$/;
		this.ck_pinCode = /^[0-9]{6}$/;
	}

	function validateInput(elemID, pattern, errorMessage) {
		var elem = $('#' + elemID);
		var elemVal = elem.val();
		var ret = 0;	
		if (!pattern.test(elemVal)) {
		 	elem.next().show().html(errorMessage);
			ret = 1;
		} else {
			elem.next().hide();
		}
		return ret;
	}

	function validateEmailID(email, errorMessage) {
		var patterns = new ValidationPatterns();
		var emailPattern = patterns.ck_email;
		return validateInput(email, emailPattern, errorMessage);
	}
	function validateMessage(message, errorMessage) {
		var patterns = new ValidationPatterns();
		var msgPattern = patterns.ck_message;
		return validateInput(message, msgPattern, errorMessage);
	}
	function validateSubject(subject, errorMessage) {
		var patterns = new ValidationPatterns();
		var pattern = patterns.ck_subject;
		return validateInput(subject, pattern, errorMessage);
	}
	function validateEcho(elemID) {
		var patterns = new ValidationPatterns();
		var pattern = patterns.ck_echo;
		var elem = $('#' + elemID);
		var elemVal = elem.val();
		var ret = 0;	
		if (!pattern.test(elemVal)) {
			ret = 1;
		}
		return ret;
	}
	function validateGroupName(name, errorMessage) {
		var patterns = new ValidationPatterns();
		var pattern = patterns.ck_name;
		return validateInput(name, pattern, errorMessage);
	}
	function validateGroupDesc(desc, errorMessage) {
		return validateMessage(desc, errorMessage);
	}
	function validateNotEqual(elemID, val, errorMessage) {
		var elem = $('#' + elemID);
		var elemVal = elem.val();
		var ret = 0;	
		if (elemVal == val) {
		 	elem.next().show().html(errorMessage);
			ret = 1;
		} else {
			elem.next().hide();
		}
		return ret;

	}
