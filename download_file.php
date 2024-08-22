<?php
function exportPdf()
{

	$file_path= 'mnt/path/storage/files';
	

	if(file_exists($file_path)){
		
	header("Cache-Control: public");
	header("Content-Description: File Transfer");
	header("Content-type: application/octet-stream");
	header("Content-Disposition: attachment; filename=mvr_doc.pdf");
	header("Content-Type: application/pdf");
	header("Content-Transfer-Encoding: binary");

	// Read the file from disk
	@readfile($file_path);

	@system("rm -rf ".$file_path);
	@system("rm  ".$file_path);
	
	}

}
?>


?>
<HTML>
    <HEAD>
        <TITLE>
           DOWNLOAD PDF
        </TITLE>
    </HEAD>

    <BODY>
        <?php $Page->drawHead();?>
            <FORM name="form_main" method="POST" action="<?php echo $reptMVRScriptFile; ?>">

				<input type="hidden" name="csrf_token" value="<?php if(isset($token)) echo $token; ?>">
            
                Download<input type="SUBMIT" name="SUBMIT" >
                
</TABLE>
</FORM>
</BODY>
                    


                   