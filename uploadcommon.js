

//Validate Form before submission			 
function verify(){
	frm = document.form_upload_image;

	if($('input[type=file]').val() == ''){
		alert('Please select file.')
		return false;

	}
} //verify


