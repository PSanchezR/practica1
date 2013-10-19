<?php
/*
<<copyright 2013 Pablo Sánchez Robles>>


This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
     any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
*/
?>
<!DOCTYPE HTML>
<html>
<head><h1><tittle>Formulario en 5 pasos</tittle></h1></head>
<body>

<?php
	$paso = 0;
	if(isset($_POST["etapa"]))
	{
		$paso = $_POST["etapa"];
	}
	
	if($paso == 1 && $_POST["nombre"]==""){$paso =0;echo"<br>Campo obligatorio";}
	else if($paso==3 && ($_POST["password1"]=="" || $_POST["password2"]=="")){$paso=2;echo"<br>Campos obligatorios";}
	else if($paso==5 && $_POST["titulación"]==""){$paso=4;echo"<br>Campo obligatorio";}
	if($paso==3 && $_POST["password1"]!=$_POST["password2"]){$paso = 2; echo"<br>Las contraseñas deben coincidir";}
	
	if($paso == 0)
	{
		
		echo"<form action='index.php' method='post'>";
		echo"	<label for='etapa' hidden>etapa:</label>";
		echo"	<h2><input type='text' name='etapa' id='etapa' value='1' hidden /></h2>";
		echo"	<h2><label for='nombre'>Nombre</label></h2>";
		echo"	<input type='text' name='nombre' id='nombre' value='' />";
		
		echo"   <input type='submit' name='botonDeEnvio' id='botonDeEnvio' value='Enviar datos' />";
		echo"   <input type='reset' name='bontoDeReset' id='botonDeEnvio' value='Vaciar formulario' />";
		echo"</form>";
	}
	elseif($paso == 1)
	{
		$nombre=$_POST["nombre"];
	
		echo"<form action='index.php' method='post'>";
		echo"	<label for='etapa' hidden>etapa:</label>";
		echo"	<input type='text' name='etapa' id='etapa' value='2' hidden />";
		echo"	<label for='nombre' hidden>Nombre</label>";
		echo"	<input type='text' name='nombre' id='nombre' value='$nombre' hidden/>";
		echo"	<h2><label for='apellido' >Apellido</label></h2>";
		echo"	<input type='text' name='apellido' id='apellido' value='' />";
		echo"	<input type='submit' name='botonDeEnvio' id='botonDeEnvio' value='Enviar datos' />";
		echo"	<input type='reset' name='bontoDeReset' id='botonDeEnvio' value='Vaciar formulario' />";
		echo"</form>";
		
	}
	elseif($paso == 2)
	{
		$nombre=$_POST["nombre"];
		$apellido=$_POST["apellido"];
		echo"<form action='index.php' method='post'>";
		echo"	<label for='etapa' hidden>etapa:</label>";
		echo"	<input type='text' name='etapa' id='etapa' value='3' hidden />";
		echo"	<label for='nombre' hidden>Nombre</label>";
		echo"	<input type='text' name='nombre' id='nombre' value='$nombre' hidden/>";
		echo"	<label for='apellido' hidden >Apellido</label>";
		echo"	<input type='text' name='apellido' id='apellido' value='$apellido' hidden />";
		echo"	<h2><label for='password1'>Contrase&ntilde;a</label></h2>";
		echo"	<input type='password' name='password1' id='password1' value='' />";
		echo"	<h2><label for='password2'>Repita la contrase&ntilde;a</label></h2>";
		echo"	<input type='password' name='password2' id='password2' value='' />";
		echo"	<input type='submit' name='botonDeEnvio' id='botonDeEnvio' value='Enviar datos' />";
		echo"	<input type='reset' name='bontoDeReset' id='botonDeEnvio' value='Vaciar formulario' />";
		echo"</form>";
		
		
		
				
	}
	elseif($paso == 3)
	{
		$nombre=$_POST["nombre"];
		$apellido=$_POST["apellido"];
		$contraseña=$_POST["password1"];
		echo"<form action='./../index.php' method='post'>";
		echo"	<label for='etapa' hidden>etapa:</label>";
		echo"	<input type='text' name='etapa' id='etapa' value='4' hidden />";
		echo"	<label for='nombre' hidden>Nombre</label>";
		echo"	<input type='text' name='nombre' id='nombre' value='$nombre' hidden/>";
		echo"	<label for='apellido' hidden >Apellido</label>";
		echo"	<input type='text' name='apellido' id='apellido' value='$apellido' hidden />";
		echo"	<label for='password1' hidden>Contrase&ntilde;a</label>";
		echo"	<input type='password' name='password1' id='password1' value='$contraseña' hidden/>";
		echo"	<label for='password2' hidden>Repita la contrase&ntilde;a</label>";
		echo"	<input type='password' name='password2' id='password2' value='$contraseña' hidden/>";
		echo"	<h2><label for='sexo'>sexo:</label></h2>";
		echo"	<input type='text' name='sexo' id='sexo' value='' />";
		
		echo"	<input type='submit' name='botonDeEnvio' id='botonDeEnvio' value='Enviar datos' />";
		echo"	<input type='reset' name='bontoDeReset' id='botonDeEnvio' value='Vaciar formulario' />";
		echo"</form>";
		
		


	
		
	}
	elseif($paso == 4)
	{
		$nombre=$_POST["nombre"];
		$apellido=$_POST["apellido"];
		$contraseña=$_POST["password1"];
		$sexo=$_POST["sexo"];
		echo"<form action='index.php' method='post'>";
		echo"	<label for='etapa' hidden>etapa:</label>";
		echo"	<input type='text' name='etapa' id='etapa' value='5' hidden />";
		echo"	<label for='nombre' hidden>Nombre</label>";
		echo"	<input type='text' name='nombre' id='nombre' value='$nombre' hidden/>";
		echo"	<label for='apellido' hidden >Apellido</label>";
		echo"	<input type='text' name='apellido' id='apellido' value='$apellido' hidden />";
		echo"	<label for='password1'hidden>Contrase&ntilde;a</label>";
		echo"	<input type='password' name='password1' id='password1' value='$contraseña' hidden/>";
		echo"	<label for='password2' hidden>Repita la contrase&ntilde;a</label>";
		echo"	<input type='password' name='password2' id='password2' value='$contraseña' hidden/>";
		echo"	<label for='sexo' hidden>sexo:</label>";
		echo"	<input type='text' name='sexo' id='sexo' value='$sexo' hidden/>";
		
		echo"	<h2><label for='titulación'>Titulación:</label></h2>";
		echo"	<input type='text' name='titulación' id='titulación' value=''/>";
		
		echo"	<input type='submit' name='botonDeEnvio' id='botonDeEnvio' value='Enviar datos' />";
		echo"	<input type='reset' name='bontoDeReset' id='botonDeEnvio' value='Vaciar formulario' /1>";
		echo"</form>";
		
	}else
	{
		echo "<br>";
		foreach($_POST as $variable => $valor)
		{
			if(($variable != "etapa")&&($variable != "botonDeEnvio"))
			{
				echo "$variable = $valor ";
				echo "<br>";
			}
		}
	}
	
	
?>
 <style>
  html { 
  background: black; 
  }
  body {
    background: #333;
    background: -webkit-linear-gradient(top, black, #666);
    background: -o-linear-gradient(top, black, #666);
    background: -moz-linear-gradient(top, black, #666);
    background: linear-gradient(top, black, #666);
    color: white;
    font-family: "Helvetica Neue",Helvetica,"Liberation Sans",Arial,sans-serif;
    width: 40em;
    margin: 0 auto;
    padding: 3em;
  }
  a {
    color: white;
  }

  h1 {
    text-transform: capitalize;
    -moz-text-shadow: -1px -1px 0 black;
    -webkit-text-shadow: 2px 2px 2px black;
    text-shadow: -1px -1px 0 black;
    box-shadow: 1px 2px 2px rgba(0, 0, 0, 0.5);
    background: #CC0000;
    width: 22.5em;
    margin: 1em -2em;
    padding: .3em 0 .3em 1.5em;
    position: relative;
  }
  h1:before {
    content: '';
    width: 0;
    height: 0;
    border: .5em solid #91010B;
    border-left-color: transparent;
    border-bottom-color: transparent;
    position: absolute;
    bottom: -1em;
    left: 0;
    z-index: -1000;
  }
  h1:after {
    content: '';
    width: 0;
    height: 0;
    border: .5em solid #91010B;
    border-right-color: transparent;
    border-bottom-color: transparent;
    position: absolute;
    bottom: -1em;
    right: 0;
    z-index: -1000;
  }
  h2 { 
    margin: 2em 0 .5em;
  }

  
  </style>
</body>
</html>
