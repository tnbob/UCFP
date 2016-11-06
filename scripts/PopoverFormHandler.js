function processAjaxReq(url1, callbackFunc) {
			jQuery.ajax({
            url : url1,
            dataType : "html",
			success: callbackFunc,
            });			
		}
function PopoverFormHandler(popoverLinkId, popoverTitle, popoverPosition, 
				popoverFormId, submitBtn, cancelBtn, getRespDivId, ajaxUrlCallback) {
	$("#"+popoverLinkId).popover({
		    html:true,
			trigger: 'click',
    		title: popoverTitle,
			placement: popoverPosition,
    		content: function() {
      			return $("#"+popoverFormId).html();
    		}	
		});
	$("#"+popoverLinkId).click(function(event) {
				event.preventDefault();
		});
	$(cancelBtn).live('click', function(event) {
			$("#"+popoverLinkId).popover('hide');
			event.preventDefault();
	});	
	function messageAjaxCallback(resp, status, httpXhr) {
		//WARN: do not change order of following statements.
		//code will break and you have been warned.	
		respDivId = getRespDivId();
		$("#"+popoverLinkId).popover('hide');	
		$('#'+respDivId).append(resp);
	}
	$(submitBtn).live('click', function() {
		var url1 = ajaxUrlCallback();
		if(url1 != null) processAjaxReq(url1, messageAjaxCallback);
	});
}
