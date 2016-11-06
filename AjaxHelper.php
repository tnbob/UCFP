<script type="text/javascript">
	function processAjaxReq(url1, callbackFunc) {
			jQuery.ajax({
            url : url1,
            dataType : "html",
			success: callbackFunc,
            });			
		}
</script>	
