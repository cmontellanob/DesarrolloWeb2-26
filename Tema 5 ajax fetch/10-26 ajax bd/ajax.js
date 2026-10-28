function cargarContenido(abrir) {
	var contenedor;
	contenedor = document.getElementById('contenido');
	var ajax = new XMLHttpRequest() //crea el objetov ajax 
	ajax.open("get", abrir, true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			contenedor.innerHTML = ajax.responseText
			
			
			


		}
	}
	ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
	ajax.send();
}


function subirDatos() {
	var contenedor;
	contenedor = document.getElementById('contenido');
	forminsertar= document.getElementById('forminsertar');

	var datos = new FormData(forminsertar);
	
	ajax = new XMLHttpRequest()
	ajax.open("POST", "insert.php", true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			contenedor.innerHTML = ajax.responseText
			setTimeout(function () { cargarContenido("read.php") }, 5000) ;
		}
	}
	ajax.send(datos);
}

function cargarDatos(id) {
	var contenedor;
	contenedor = document.getElementById('contenido');
	var ajax = new XMLHttpRequest() //crea el objetov ajax 
	ajax.open("get", "form_editar.php?id="+id, true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			contenedor.innerHTML = ajax.responseText
		}
	}
	ajax.send();
}
function editarDatos() {
	var contenedor;
	contenedor = document.getElementById('contenido');
	formeditar= document.getElementById('formeditar');

	var datos = new FormData(formeditar);
	
	ajax = new XMLHttpRequest()
	ajax.open("POST", "update.php", true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			contenedor.innerHTML = ajax.responseText
			setTimeout(function () { cargarContenido("read.php") }, 5000) ;
		}
	}
	ajax.send(datos);
}

function modatrarDatosEliminar(id) {
	var modal = document.getElementById("confirmar");
	var id=id;
	document.getElementById("contenido_modal").innerHTML = "<p>¿Está seguro de eliminar el registro con ID " + id  ;
	modal.style.display = "block";
	
}
function eliminarDatos() {
	alert("Se eliminará el registro con ID " + id);
	var contenedor;
	contenedor = document.getElementById('contenido');
	var ajax = new XMLHttpRequest() //crea el objetov ajax
	ajax.open("get", "delete.php?id="+id, true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			contenedor.innerHTML = ajax.responseText
			setTimeout(function () { cargarContenido("read.php") }, 5000) ;
		}
	}		
}	
function cerrarModal(){
	var modal = document.getElementById("confirmar");
	modal.style.display = "none";
};