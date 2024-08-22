<?php 

function downloadTemplate(){
	$filename = random_int(1000, 100000).'_'."template.csv";
	header('Content-Disposition: attachment;filename='.$filename);
	header('Content-Type: application/csv;');
	$array = array(
		0=>array('name','place','age','Qualification','applicant_id')
	);

	$f = fopen('php://output', 'w');
	$delimiter = ',';
  foreach ($array as $line) {
      fputcsv($f, $line, $delimiter);
  }
	exit();
}
?>
<HTML>
    <HEAD>
        <TITLE>
           Download Template
        </TITLE>
    </HEAD>

    <BODY>
        <FORM enctype="multipart/form-data" method="POST" action="download_csv_template.php">
        <a href='<?htmlspecialchars($_SERVER['PHP_SELF']);?>'> Download </a> 
        </FORM>
    
    </BODY>
</HTML>