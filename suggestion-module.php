<?php session_start();
$userData = $_SESSION[session_id()];
if(!$userData) {
	echo "<p>Please login!<br/><p>";
	exit(100);
}
$uid = $userData['uid'];
if(!$uid) {
	echo "Internal error, please try later. Allow us sometime to fix this.";
	exit(101);
}
?>
<div style="margin-top:20px; padding:10px" class="well">
	<p>If you have feature request or suggestion to improve RotateWave! <a id='suggestionLink' href='#'>Suggest.</a> </p>
</div>
<div id="suggestRespDiv">
</div>

<form id="suggestionForm" style="display:none"> 
	<input id="subject" type="text" name="subject" placeholder="Subject"> 
	<span class="error"> </span>
	<textarea  id="suggestion" placeholder="Type your suggestion here" class="field span12" 
	rows="3" maxlength="300" spellcheck="true"></textarea>
	<span class="error"> </span>
	<button type="submit" class="btn btn-primary suggest suggest1">Submit</button>
	<button type="button" class="btn btn-primary suggest cancel">Cancel</button>
</form>

<script type="text/javascript">
	function getSuggestRespDiv() {
		return 'suggestRespDiv';
	}
	function generateSuggestionUrl() {
		if(validateSubject('subject', 'Subject limit is between 14 character to 128 characters.')) return null;
		if(validateMessage('suggestion', 'Suggestion limit is between 20 to 1024 characters.')) return null;
		var subject = $("#subject").val();
		var suggestion = $("#suggestion").val();
		
		return "/post-suggestion-module.php?subject=" + subject+ "&suggestion=" + suggestion;
	}
	popoverFormHandler = new PopoverFormHandler('suggestionLink', 'Suggest!', 'left', 'suggestionForm', 
		'.btn.btn-primary.suggest.suggest1', '.btn.btn-primary.suggest.cancel', getSuggestRespDiv, generateSuggestionUrl);
</script>

