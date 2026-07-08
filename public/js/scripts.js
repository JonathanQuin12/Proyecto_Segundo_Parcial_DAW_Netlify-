//Validaciones para el sistema Restaurante SABORÈ//

// Validación del formulario de Cliente.
function validarCliente() {

    let nombre = document.getElementsByName("nombre")[0].value.trim();
    let telefono = document.getElementsByName("telefono")[0].value.trim();
    let email = document.getElementsByName("email")[0].value.trim();
    let direccion = document.getElementsByName("direccion")[0].value.trim();

    if (nombre === "") {
        alert("Ingrese el nombre del cliente.");
        return false;
    }

    if (telefono === "") {
        alert("Ingrese el teléfono.");
        return false;
    }

    if (email === "") {
        alert("Ingrese el correo.");
        return false;
    }

    if (direccion === "") {
        alert("Ingrese la dirección.");
        return false;
    }

    return true;
}

// Validación del formulario de Pedido.
function validarPedido() {

    let cliente = document.getElementsByName("id_cliente")[0].value.trim();
    let fecha = document.getElementsByName("fecha_pedido")[0].value;
    let estado = document.getElementsByName("estado")[0].value.trim();

    if (cliente === "") {
        alert("Ingrese el ID del cliente.");
        return false;
    }

    if (fecha === "") {
        alert("Seleccione la fecha.");
        return false;
    }

    if (estado === "") {
        alert("Ingrese el estado.");
        return false;
    }

    return true;
}
// Validación del formulario de Compra.
function validarCompra() {

    const proveedor = document.querySelector("[name='id_proveedor']").value;
    const fecha = document.querySelector("[name='fecha_compra']").value;
    const total = document.querySelector("[name='total']").value;

    if (proveedor === "") {
        alert("Seleccione un proveedor.");
        return false;
    }

    if (fecha === "") {
        alert("Ingrese la fecha de compra.");
        return false;
    }

    if (total === "" || Number(total) <= 0) {
        alert("Ingrese un total válido.");
        return false;
    }

    return true;
}

// Validación del formulario de Empleado.
function validarEmpleado() {

    let nombre = document.getElementsByName("nombre")[0].value.trim();
    let cargo = document.getElementsByName("cargo")[0].value.trim();
    let telefono = document.getElementsByName("telefono")[0].value.trim();
    let email = document.getElementsByName("email")[0].value.trim();
    let fecha = document.getElementsByName("fecha_contratacion")[0].value;

    if (nombre === "") {
        alert("Ingrese el nombre del empleado.");
        return false;
    }

    if (cargo === "") {
        alert("Ingrese el cargo del empleado.");
        return false;
    }

    if (telefono === "") {
        alert("Ingrese el teléfono.");
        return false;
    }

    if (email === "") {
        alert("Ingrese el correo electrónico.");
        return false;
    }

    if (fecha === "") {
        alert("Seleccione la fecha de contratación.");
        return false;
    }

    return true;
}

// Validación del formulario de Proveedor.
function validarProveedor() {
    let nombre = document.getElementsByName("nombre")[0].value.trim();
    let telefono = document.getElementsByName("telefono")[0].value.trim();
    let email = document.getElementsByName("email")[0].value.trim();
    let direccion = document.getElementsByName("direccion")[0].value.trim();

    if(nombre === ""){
        alert("Ingrese el nombre del proveedor.");
        return false;
    }

    if(telefono === ""){
        alert("Ingrese el teléfono.");
        return false;
    }

    if(email === ""){
        alert("Ingrese el correo.");
        return false;
    }

    if(direccion === ""){
        alert("Ingrese la dirección.");
        return false;
    }
    return true;
}
// Validación del formulario de Venta.
function validarVenta() {

    let empleado = document.getElementsByName("id_empleado")[0].value;
    let total = document.getElementsByName("total")[0].value;

    if (empleado === "") {

        alert("Seleccione un empleado.");

        return false;
    }

    if (total === "" || Number(total) <= 0) {

        alert("Ingrese un total válido.");

        return false;
    }
    return true;
}

// Validación del formulario de Categoria.
function validarCategoria() {

    let nombre = document.getElementsByName("nombre")[0].value.trim();
    let descripcion = document.getElementsByName("descripcion")[0].value.trim();

    if (nombre === "") {

        alert("Ingrese el nombre de la categoría.");
        return false;
    }

    if (descripcion === "") {

        alert("Ingrese la descripción de la categoría.");
        return false;
    }
    return true;
}

// Validación del formulario de Producto.//
function validarProducto() {

    let categoria = document.getElementsByName("id_categoria")[0].value.trim();
    let nombre = document.getElementsByName("nombre")[0].value.trim();
    let precio = document.getElementsByName("precio")[0].value.trim();
    let stock = document.getElementsByName("stock")[0].value.trim();

    if (categoria === "") {
        alert("Seleccione una categoría.");
        return false;
    }

    if (nombre === "") {
        alert("Ingrese el nombre del producto.");
        return false;
    }

    if (precio === "" || Number(precio) <= 0) {
        alert("Ingrese un precio válido.");
        return false;
    }

    if (stock === "" || Number(stock) < 0) {
        alert("Ingrese un stock válido.");
        return false;
    }

    return true;
}