<script>
function usrpas(){
if (document.form1.txt.value=="admin" && document.form1.num.value=="Letees" || document.form1.txt.value=="Transi" && document.form1.num.value=="1234" || document.form1.txt.value=="Cris" && document.form1.num.value=="1234" ){window.location="home.htm"}
else {alert("Error en Usuario o Contraseña. Intenta de nuevo.")}
}
document.oncontextmenu=new Function("return false");
</script>

<form name="form1">
<input type="text" name="txt"> Usuario (admin)<br>
<input type="text" name="num"> Contraseña (Letees)<br>
<input type="text" name="text> Usuario (Transi ó Cris)<br>
<input type="text" name="num"> Contraseña (1234)<br>
<input type="button" value="ir a.." onclick="usrpas()">
</form>
