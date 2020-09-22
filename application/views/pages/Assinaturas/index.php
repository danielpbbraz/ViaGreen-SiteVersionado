<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="css/estilos.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {

	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	color:#333;
	font-size:12px;
}
</style>
</head>

<body>
<div style="margin-left:50px;"><img src="logo.jpg"/></div>
<?php if(isset($msg)) { ?>
<div class="aviso"><?php echo $msg; ?></div>
          <?php } ?>
            <form id="form1" name="form1" method="get" action="viagreen.php">
             <table width="288" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="69" height="26" align="right" valign="middle" class="txtc" style="padding-right:10px;"> Nome </td>
                <td width="219" height="26" align="left" valign="middle" >
                <input name="nome" type="text" class="formContato caixac" id="nome" tabindex="1" size="30" maxlength="50" />
              </td>
              </tr>
              <tr>
                <td height="25" align="right" valign="middle" class="txtc" style="padding-right:10px;"> Cargo </td>
                <td height="25" align="left" valign="middle">
                  <input name="cargo" type="text" class="formContato caixac" id="cargo" tabindex="2" size="30" />
                  </td>
              </tr>
               <tr>
                <td height="25" align="right" valign="middle" class="txtc" style="padding-right:10px;"> Email</td>
                <td height="25" align="left" valign="middle">
                  <input name="email" type="text" class="formContato caixac" id="email" tabindex="2" size="30" />
                  </td>
              </tr>
              <tr>
                <td height="25" align="right" valign="middle" class="txtc" style="padding-right:10px;"> Cel.</td>
                <td height="25" align="left" valign="middle">
                  <input name="cel" type="text" class="formContato caixac" id="cel" tabindex="2" size="30" />
                  </td>
              </tr>
                <tr>
                <td height="25" align="right" valign="middle" class="txtc" style="padding-right:10px;"> Endereço</td>
                <td height="25" align="left" valign="middle"><textarea name="end" cols="28" rows="4" class="formContato caixac" id="end" tabindex="2"></textarea>
                  </td>
              </tr>
              <tr>
                <td height="50" colspan="2" align="right" valign="bottom"><input name="input" type="image" src="criar.jpg" alt="Enviar" tabindex="12" style="margin-right:30px;" /></td>
              </tr>
</table>
            <input name="enviaEmail" type="hidden" value="" />
          </form>         

</body>
</html>

<div style="lin"