<?
# INICIAMOS LA SESSION
session_start();
session_name('permiso');
# NOS CONECTAMOS AL SERVIDOR
$conexion=mysql_connect("localhost","root","")
					or die("Error en la lina: ".__LINE__." de tu codigo.<br>El motivo del error es: ".mysql_error()."<br>En conclusion: No se ha podido conectar al servidor.");

# USAMOS LA BDD
$use = mysql_select_db("free",$conexion)
	or die("Error en la linea: ".__LINE__." de tu codigo.<br>El motivo del error es: ".mysql_error()."<br>En conclusion: No se ha podidos usar la BDD free.");	

# HACEMOS LA CONSULTA
$sql = "SELECT permiso, alias, passwd, permitido
		FROM usuario
		WHERE alias = '".$_POST['usu_form']."'";

$valores=mysql_query($sql)
	or die("Error en la linea: ".__LINE__." de tu codigo.<br>El motivo del error es: ".mysql_error()."<br>En conclusion: No se ha realizado la consulta");			

$registro=mysql_fetch_array($valores);

# COMPROBAMOS DATOS
$nick=$registro['alias'];
$passwd=$registro['passwd'];
$nick_form=$_POST['usu_form'];
$passwd_form=$_POST['pass_form'];
$permitido=$registro['permitido'];

# SESSION
$_SESSION["permiso_s"] = $registro['permiso'];

if ($nick_form==$nick && $passwd_form==$passwd){
	if ($_SESSION["permiso_s"]=="1"){
?>
	<script language="JavaScript">
		location.href="zona2.php";
	</script>
<?
}
	if ($_SESSION["permiso_s"]=="3"){
?>
	<script language="JavaScript">
		location.href="zona2.php";
	</script>
<?
}
	if ($_SESSION["permiso_s"]=="2" && $permitido=="2"){
?>
	<script language="JavaScript">
		alert('A espensas de permisos del administrador')
		location.href="home.html";
	</script>
<?
	}
	if ($_SESSION["permiso_s"]=="2"){
	?>
	<script language="JavaScript">
		location.href="zona.php";
	</script>
<?
	}
}
if ($nick_form!=$nick || $passwd_form!=$passwd){
session_destroy();
$url="Location:login.html";
header($url);	
?>
	<script language="JavaScript">
		location.href="login.html";
	</script>
<?
}
if ($nick_form=="" || $passwd_form==""){
?>
	<script language="JavaScript">
		location.href="login.html";
	</script>
<?
}
?> 
