<?php
session_start();
require_once('library.php');
isUser();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Courier / Cargo Tracking </title>
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
</head>

<body>
<table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody><tr>
    <td width="900"></td>
  </tr>
  
  <tr>
    <td bgcolor="#FFFFFF"><table border="0" cellpadding="1" cellspacing="1" align="center" width="98%">
      <tbody><tr>
        <td class="Partext1">&nbsp;</td>
      </tr>
      
      <tr>
        <td class="Partext1"><div align="center">
          <table cellpadding="4" cellspacing="0" align="center" width="70%">
<script language="javascript">
function validate()
  {
 if (form.Consignment.value == "" )
		 {
			alert("Consignment No is required.");
			form.track.focus( );
			return false;
		}
	}
</script>
            
              <tbody><tr>
                <td class="TrackTitle" valign="top"><div class="newtext" align="center"></div></td>
              </tr>
              <tr>
                <td class="bottom" valign="middle">&nbsp;</td>
              </tr>
              <tr bgcolor="EFEFEF">
                <td valign="top">Courier is added successfully.   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &rarr;<a href="courier_list.php">Back to Courier List</a><br/>
				</td>
              </tr>
              <tr bgcolor="EFEFEF">
                <td class="TrackNormalBlue" bgcolor="#FFFFFF" valign="top">&nbsp;</td>
              </tr>
          </tbody></table>
        </div></td>
        </tr>
      <tr>
        <td class="Partext1">&nbsp;</td>
        </tr>
      
      
      <tr>
        <td>&nbsp;</td>
        </tr>
    </tbody></table>      </td>
  </tr>
  <tr>

 </td>
  </tr>
</tbody></table>


</body></html>