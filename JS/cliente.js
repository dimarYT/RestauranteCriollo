// JavaScript para el CRUD de Clientes con tabla de datos simulada
const clienteForm = document.getElementById("cliente-form");
const clientesTable = document.getElementById("clientes-table");
const nombreInput = document.getElementById("nombre");
const apellidoInput = document.getElementById("apellido");
const generoInput = document.getElementById("genero");
const edadInput = document.getElementById("edad");
const nacimientoInput = document.getElementById("nacimiento");
const paisInput = document.getElementById("pais");

// Datos simulados de clientes en forma de una matriz
const clientesData = [];

// Función para mostrar la lista de clientes en la tabla
function mostrarClientes() {
    const tbody = document.getElementById("clientes-list");
    tbody.innerHTML = "";
    for (let i = 0; i < clientesData.length; i++) {
        const cliente = clientesData[i];
        const row = document.createElement("tr");
        row.innerHTML = `
            <td>${cliente.nombre}</td>
            <td>${cliente.apellido}</td>
            <td>${cliente.genero}</td>
            <td>${cliente.edad}</td>
            <td>${cliente.nacimiento}</td>
            <td>${cliente.pais}</td>
            <td>
                <button onclick="editarCliente(${i})">Editar</button>
                <button onclick="eliminarCliente(${i})">Eliminar</button>
            </td>
        `;
        tbody.appendChild(row);
    }
}

// Función para agregar un nuevo cliente a la tabla
function agregarCliente() {
    const nombre = nombreInput.value;
    const apellido = apellidoInput.value;
    const genero = generoInput.value;
    const edad = edadInput.value;
    const nacimiento = nacimientoInput.value;
    const pais = paisInput.value;

    if (nombre && apellido && genero && edad && nacimiento && pais) {
        const nuevoCliente = {
            nombre,
            apellido,
            genero,
            edad,
            nacimiento,
            pais
        };
        clientesData.push(nuevoCliente);
        mostrarClientes();
        clienteForm.reset();
    }
}

// Función para editar un cliente
function editarCliente(index) {
    const cliente = clientesData[index];
    nombreInput.value = cliente.nombre;
    apellidoInput.value = cliente.apellido;
    generoInput.value = cliente.genero;
    edadInput.value = cliente.edad;
    nacimientoInput.value = cliente.nacimiento;
    paisInput.value = cliente.pais;

    clientesData.splice(index, 1);
    mostrarClientes();
}

// Función para eliminar un cliente
function eliminarCliente(index) {
    if (confirm("¿Estás seguro de eliminar este cliente?")) {
        clientesData.splice(index, 1);
        mostrarClientes();
    }
}

// Mostrar lista de clientes al cargar la página
mostrarClientes();

// Agregar evento al formulario para agregar cliente
clienteForm.addEventListener("submit", function (event) {
    event.preventDefault();
    agregarCliente();
});
