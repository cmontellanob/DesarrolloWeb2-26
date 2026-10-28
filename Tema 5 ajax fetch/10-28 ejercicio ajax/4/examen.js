function pregunta4()
{
    var contenedor;
	contenedor = document.getElementById('contenido');
	fetch('catalogo.php')
		.then(response => response.text())
		.then(data => contenedor.innerHTML=data);

}
function abrirmodal(id){
   contenedor = document.getElementById('contenido-modal');
   fetch('datos-receta.php?id='+id)
		.then(response => response.text())
		.then(data => contenedor.innerHTML=data); 

   document.querySelector(".modal").style.display="block";
   document.getElementById("imagen-modal").src="images/"+fotografia;
}
function cerrarmodal(){
    document.querySelector(".modal").style.display="none";
}
