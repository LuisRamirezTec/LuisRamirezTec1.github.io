function agregarRegistro() {
  // Capturar los valores de los campos del formulario
  var nombre = document.getElementById("titulo").value;
  var correo = document.getElementById("reseña").value;
  var telefono = document.getElementById("noticia").value;

  // Crear una nueva fila en la tabla y agregar los valores en las celdas
  var tabla = document.getElementById("tabla").getElementsByTagName("tbody")[0];
  var nuevaFila = tabla.insertRow();
  var celdaNombre = nuevaFila.insertCell(0);
  var celdaCorreo = nuevaFila.insertCell(1);
  var celdaTelefono = nuevaFila.insertCell(2);
  celdaNombre.innerHTML = nombre;
  celdaCorreo.innerHTML = correo;
  celdaTelefono.innerHTML = telefono;
}