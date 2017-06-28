<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
Esto es el html.<br>
Con Mysql:<br>
<form id="insertData">
	<input type="text" placeholder="Nombre" id="i_nombre">
	<input type="text" placeholder="Dinero" id="i_dinero">
	<input type="submit" value="Insertar">
</form>
<br>
<?php

require ('select.php');
?>

<input type="text" id="dinero"/>

<button id="act" onclick="request();">Actualiza</button>
<button id="act2" onclick="deletee();">Borrar</button>

<br><br>
Con postgres <br>
<form id="insertpg">
	<input type="text" placeholder="Nombre" id="pg_nombre">
	<input type="text" placeholder="Dinero" id="pg_dinero">
	<input type="submit" value="Insertar">
</form>
<br>
<?php

require ('pg_select.php');
?>
<input type="text" id="pg_dinero2"/>
<button id="pg_act" onclick="pg_request();">Actualiza</button>
<button id="pg_act2" onclick="pg_deletee();">Borrar</button>
<br>


<div id="demo"></div>
</body>
</html>

<script type="text/javascript">

var xhttp = new XMLHttpRequest();
	function request(){

		var seleccion = document.getElementById('seleccion');
		var id = seleccion.value;

		var texto = document.getElementById('dinero');
		var dinero = texto.value;

		var url = "update.php";
		
		url = url + "?id="+id+"&dinero="+dinero;

		xhttp.onreadystatechange = function() {
	        if (this.readyState == 4 && this.status == 200) {
	            document.getElementById("demo").innerHTML =
	            this.responseText;
	       }
	    };
		xhttp.open("GET", url, true);
		xhttp.send();
	}
	function deletee(){
		var seleccion = document.getElementById('seleccion');
		var id = seleccion.value;

		var url = "delete.php";
		
		url = url + "?id="+id;

		xhttp.onreadystatechange = function() {
	        if (this.readyState == 4 && this.status == 200) {
	            if(confirm(this.responseText)){
	        		
	        	}
	            location.reload(true);
	       }
	    };

		xhttp.open("GET", url, true);
		xhttp.send();

	}


	var form = document.getElementById("insertData");

	form.onsubmit = function(e){
		e.preventDefault();


		var nombre = document.getElementById('i_nombre').value;
		var dinero = document.getElementById('i_dinero').value;
		var data = "nombre="+nombre +"&dinero="+dinero;

		xhttp.onreadystatechange = function() {
	        if (this.readyState == 4 && this.status == 200) {
	            document.getElementById("demo").innerHTML =
	            this.responseText;
	       }
	    };
	    var url = "insert.php";
	    url = url + "?" + data;
		xhttp.open("GET", url, true);
		xhttp.send();
	};

	var pg_form = document.getElementById("insertpg");

	pg_form.onsubmit = function(e){
		e.preventDefault();


		var nombre = document.getElementById('pg_nombre').value;
		var dinero = document.getElementById('pg_dinero').value;
		var data = "nombre="+nombre +"&dinero="+dinero;

		xhttp.onreadystatechange = function() {
	        if (this.readyState == 4 && this.status == 200) {
	            document.getElementById("demo").innerHTML =
	            this.responseText;
	       }
	    };
	    var url = "pg_insert.php";
	    url = url + "?" + data;
		xhttp.open("GET", url, true);
		xhttp.send();
	};

	function pg_request(){

		var seleccion = document.getElementById('pg_seleccion');
		var id = seleccion.value;

		var texto = document.getElementById('pg_dinero2');
		var dinero = texto.value;

		var url = "pg_update.php";
		
		url = url + "?id="+id+"&dinero="+dinero;

		xhttp.onreadystatechange = function() {
	        if (this.readyState == 4 && this.status == 200) {
	            document.getElementById("demo").innerHTML =
	            this.responseText;
	       }
	    };
		xhttp.open("GET", url, true);
		xhttp.send();
	}
	function pg_deletee(){
		var seleccion = document.getElementById('pg_seleccion');
		var id = seleccion.value;

		var url = "pg_delete.php";
		
		url = url + "?id="+id;

		xhttp.onreadystatechange = function() {
	        if (this.readyState == 4 && this.status == 200) {

	        	if(confirm(this.responseText)){

	        	}
	            location.reload(true);
	       }
	    };

		xhttp.open("GET", url, true);
		xhttp.send();

	}

	


</script>
