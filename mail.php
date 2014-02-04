
<?php

$message .="<table width='100%' border='0' cellspacing='0' cellpadding='0'>
  <tr>
    <td width='30%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='66%'>&nbsp;</td>
  </tr>
  <tr>
    <td><b>Name</b></td>
    <td>:</td>
    <td>".$sname."</td>
  </tr>
    <tr>
    <td width='30%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='66%'>&nbsp;</td>
  </tr>
  <tr>
    <td><b>Staff Code</b></td>
    <td>:</td>
    <td>".$staffcode."</td>
  </tr>
    <tr>
    <td width='30%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='66%'>&nbsp;</td>
  </tr>
  <tr>
    <td><b>Assignment</b></td>
    <td>:</td>
    <td>".$work."</td>
  </tr>
   <tr>
    <td width='30%'>&nbsp;</td>
    <td width='4%'>&nbsp;</td>
    <td width='66%'>&nbsp;</td>
  </tr>
  <tr>
    <td><b>Assignment</b></td>
    <td>:</td>
    <td><a target=\"_blank\" href=\"http://www.myfico.com/Images/sample_overlay.gif\">sample attachment</a></td>
  </tr>
</table>";

	
	$from="examplefrom@mail.com";
	$subject = 'your subject here..';
  $from="exampleto@mail.com";

        
	$headers 				= "from: ".$from."\r\n";		
	$headers  			.= 'MIME-Version: 1.0' . "\r\n";
	$headers 				.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";	


	
	echo 'sent';

	?>
