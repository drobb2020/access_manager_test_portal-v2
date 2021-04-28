<html>
<head>
<title>Digital Airlines Intranet</title>
<meta http-equiv="Pragma" content="no-cache"><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<script type="text/JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<style type="text/css">
<!--
body {
	background-image: url(images/backer.gif);
	background-repeat: repeat-x;
}
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
-->
</style></head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="MM_preloadImages('images/sales_on.gif','images/payroll_on.gif','images/vpn_on.gif','images/medical_on.gif')">
<!-- ImageReady Slices (digital_airlines.psd) -->
<div style="position:absolute; left:450px; top:42px;color:cc0000;font: 14px arial bold"><?php
$headers = apache_request_headers();

foreach($headers as $header => $value)
{
	$found = false;
	if($header == "X-Name")
    {
		$found = true;
		echo "<b>Welcome: $value</b>";
    }

}
?></div>
<div style="position:absolute; left:680px; top:42px;color:6a696a;font: 12px arial"> <a href="/plogout"></a></div>
<table id="Table_01" width="747" height="700" border="0" cellpadding="0" cellspacing="0">
	<tr>
	  <td colspan="5">
		  <img src="images/digital_airlines_01.gif" width="747" height="233" alt=""></td>
	</tr>
	<tr>
		<td rowspan="3">
			<img src="images/digital_airlines_02.gif" width="286" height="182" alt=""></td>
		<td><a href="/webacc" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image13','','images/email_on.gif',1)"><img src="images/email.gif" name="Image13" width="196" height="86" border="0"></a></td>
		<td>
			<img src="images/digital_airlines_04.gif" width="10" height="86" alt=""></td>
		<td><a href="/sslvpn/login" target="_blank" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image14','','images/vpn_on.gif',1)"><img src="images/vpn.gif" name="Image14" width="196" height="86" border="0"></a></td>
		<td>
			<img src="images/digital_airlines_06.gif" width="59" height="86" alt=""></td>
	</tr>
	<tr>
		<td colspan="4">
			<img src="images/digital_airlines_07.gif" width="461" height="10" alt=""></td>
	</tr>
	<tr>
		<td><a href="spLinkGoesHere" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image15','','images/medical_on.gif',1)"><img src="images/medical.gif" name="Image15" width="196" height="86" border="0"></a></td>
		<td>
			<img src="images/digital_airlines_09.gif" width="10" height="86" alt=""></td>
		<td>
		<?php

$headers = apache_request_headers();

foreach($headers as $header => $value)
{
	if($header == "X-Role")
    {
        $Pos = strpos($value, "sales_role");
        if(false !== $Pos)
        {
            echo "<a href=\"sales/\" onMouseOut=\"MM_swapImgRestore()\" onMouseOver=\"MM_swapImage('Image12','','images/sales_on.gif',1)\"><img src=\"images/sales.gif\" name=\"Image12\" width=\"196\" height=\"86\" border=\"0\"></a</td>";

        }
    }

}

?>
</td>
		<td>
			<img src="images/digital_airlines_11.gif" width="59" height="86" alt=""></td>
	</tr>
	<tr>
		<td colspan="5">
			<img src="images/digital_airlines_12.gif" width="747" height="285" alt=""></td>
	</tr>
</table>



<!-- End ImageReady Slices -->
</body>


</html>

