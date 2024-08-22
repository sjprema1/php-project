<?php
ini_set("upload_max_filesize","10M");


function storeImage(){
    $finfo = new finfo(FILEINFO_MIME); //return mimetype
    $filename = $_FILES['image']['tmp_name'];
	$FileType = $finfo->file($filename);
	if (isset($_FILES['image']['size'])) $FileSize = $_FILES['image']['size'];
	if (isset($_FILES['image']['image'])) $FileSize = $_FILES['image']['size'];
	if (isset($_FILES['image']['error'])) $StatusCode = $_FILES['image']['error'];

    
	$fileTypes['application/pdf'] 							= 'pdf';
	$fileTypes['application/pdf; charset=binary'] 			= 'pdf';
	$fileTypes['image/gif'] 								= 'gif';
	$fileTypes['image/gif; charset=binary'] 				= 'gif';
	$fileTypes['image/jpeg'] 								= 'jpg';
	$fileTypes['image/jpeg; charset=binary']  				= 'jpg';
	$fileTypes['image/pjpeg'] 								= 'jpg';
	$fileTypes['image/png'] 								= 'png';
	$fileTypes['image/png; charset=binary'] 				= 'png';
	$fileTypes['image/tiff'] 								= 'tif';
	$fileTypes['image/tiff; charset=binary'] 				= 'tif';
	$fileTypes['image/x-png'] 								= 'png';
	$fileTypes['application/octet-stream']  				= 'tif';
    
    if(isset($fileTypes[$FileType])){
        $ext = $fileTypes[$FileType];
    }else{
        $ext = '';
        }
    $file_id = random_int(3,1000);
    $processFolder ='/mnt/path/store/image/'.$file_id;
    if(!mkdir($processFolder, 0777, true)){
        $message = "Problem in folder creation. Please try again.";
        return $message;
        }
                
    if (move_uploaded_file($_FILES['image']['tmp_name'],$processFolder.'/original') == true) {
        $FileContents = file_get_contents($processFolder.'/original');
        
}
}

?>

<HTML>
<HEAD>
    <TITLE>Document Image Upload</TITLE>
    <LINK rel="STYLESHEET" TYPE="text/css" href="<?php $Page->echoCSSFile();?>">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</HEAD>

<BODY>
    <TABLE cellpadding="0" cellspacing="0" border="0">
        <FORM name="form_upload_image" action="upload.php" method="post" 
        enctype="multipart/form-data" onSubmit="return verify()">
           <input type="hidden" name="csrf_token" value="<?php if(isset($token)) echo $token; ?>">
            <INPUT type="hidden" name="MAX_FILE_SIZE" value="10485760" />
            <TABLE cellpadding="0" cellspacing="0" border="0">
            <?php
                $Dialog->drawHBodyLine(8,10);
                if ((strlen($Message) && $_FILES['image']['error'] != 0) || ($InsertStatus == false) || $FileTypeError == true) {
                    echo '<TR><TD colspan="8" align="CENTER"><FONT class="'.$Dialog->getGlobalFont('urgent').'">'.nl2br($Message).'</FONT></TD></TR>';
                } // if
                elseif (strlen($Message) && $_FILES['image']['error'] == 0) {
                    echo '<TR><TD colspan="8" align="CENTER"><FONT class="'.$Dialog->getGlobalFont('important').'">'.nl2br($Message).'</FONT></TD></TR>';
                } // elseif
            ?>
                <TR>
                    <TD nowrap align="LEFT"><FONT class="<?php $Page->echoGlobalFont('label');?>">File:&nbsp;&nbsp;</FONT></TD>
                    <TD nowrap align="LEFT" colspan="2"><FONT class="<?php $Page->echoGlobalFont('value');?>">
                    <INPUT type="file" size="50" maxlength="50" name="image"></FONT></TD>
                </TR>
               </TABLE>
           <TR>
                   <TD nowrap align="CENTER"><INPUT type="submit" name="Submit" value="Submit"></TD>
           </TR>
            </FORM>
           <?php $Dialog->drawTail();?>
           </TD></TR>
        </TABLE>
 <?php $Page->drawTail();?>
 <script src="../javascript/uploadcommon.js"></script>
 <style>
.load{background-image:url(loader.gif);background-position:center;background-repeat:no-repeat;}
 </style>
</BODY>
</HTML>

