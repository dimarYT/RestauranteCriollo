
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/bcf953c74c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Estilos/estilo.css">
                 
    <style>
        #buscarContainer {
            margin-top: auto;
            margin-bottom: 20px;
            text-align: left;
        }

        #inputBuscar {
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 11px;
        }

        #btnBuscar {
            padding: 8px 12px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 11px;
            cursor: pointer;
        }
    </style>

</head>
<body>
    <nav>
    <ul><a href="#">CRIS-CORP</a></ul>
        <ul>
            <li><a href="../Modelo/Cliente.php">Clientes</a></li>
            <li><a href="../Modelo/Empleados.php">Empleados</a></li>
            <li><a href="../Modelo/Menu.php">Menu</a></li>
            <li><a href="../Modelo/Mesas.php">Mesas</a></li>
            <li><a href="../Modelo/Promocion.php">Promocion</a></li>
            <li><a href="../Modelo/Proveedor.php">Proveedores</a></li>
            <li><a href="../Modelo/Menu.php"><i class="fa-sharp fa-solid fa-user"></i></a></li>
        </ul>
    </nav>
    <h1 class="text-center p-3" style="color: #000000;">Mantenimiento de Clientes</h1>
    <div class="container-fluid row">

    <form class="col-3 p3" method = "POST" >
        <h3 class="text-center" style="color: #000000">Registro de clientes</h3>
        <?php
            include "../Conexion/conexion.php";
            include "../Controlador/registro_clientes.php";
        ?>
        <div class="mb-1">
            <label for="exampleInputEmail1" class="form-label" style="color: #000000">Nombre</label>
            <input type="text" class="form-control" name="nombre" placeholder="Ingrese su nombre">
        </div>
        <div class="mb-1">
            <label for="exampleInputEmail1" class="form-label" style="color: #000000">Apellido</label>
            <input type="text" class="form-control" name="apellido" placeholder="Ingrese su apellido">
        </div>
        <div class="mb-1">
            <label for="exampleInputEmail1" class="form-label" style="color: #000000">DNI</label>
            <input type="text" class="form-control" name="dni" placeholder="Ingrese su DNI">
        </div>
        <div class="mb-1">
            <label for="exampleInputEmail1" class="form-label" style="color: #000000">Fecha de nacimiento</label>
            <input type="date" class="form-control" name="fecha_nacimiento" placeholder="Ingrese su fecha de nacimiento">
        </div>
        <div class="mb-1">
            <label for="exampleInputEmail1" class="form-label" style="color: #000000">Correo</label>
            <input type="email" class="form-control" name="correo" placeholder="Ingrese su correo">
        </div>
        <div class="text-center">
                <button type="submit" class="btn btn-danger" name="btnregistrar" value="ok">Registrar</button>
                <button id="imprimir" class="btn btn-success" onclick="imprimirPagina()">Imprimir</button>
                <button id="generarPDF" class="btn btn-primary" onclick="generarPDF()">Generar PDF</button>
        </div>
    </form>
    <div class="col-8 p-4">
    <div id="buscarContainer">
        <input type="text" id="inputBuscar" placeholder="Buscar..." style="margin-right: 10px;">
        <button id="btnBuscar" onclick="buscar()">Buscar</button>
    </div>
        <table id="mitabla" class="table table-bordered" align="center">
            <thead class="table-dark" align="center">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRES</th>
                    <th scope="col">APELLIDOS</th>
                    <th scope="col">DNI</th>
                    <th scope="col">FECHA DE NACIMIENTO</th>
                    <th scope="col">CORREO</th>
                    <th scope="col">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "../Conexion/conexion.php";
                    $sql = $conexion->query(" select * from clientes ");
                    while($datos = $sql->fetch_object()){ ?>
                        <tr align="center">
                            <td><?=$datos->id?></td>
                            <td><?=$datos->nombre?></td>
                            <td><?=$datos->apellido?></td>
                            <td><?=$datos->dni?></td>
                            <td><?=$datos->fecha_nacimiento?></td>
                            <td><?=$datos->correo?></td>
                            
                            <td>
                                <a href= "../Modelo/modificar_clientes.php?id=<?= $datos->id?>" class= "btn betn-small btn-warning" ><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href= "../Controlador/eliminar_clientes.php/?id=<?= $datos->id?>" class= "btn betn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                <?php   }
                ?>
            </tbody>
        </table>
  </div>
 
  <script>
    function buscar() {
        var input, filtro, tabla, tr, td, i, txtValue;
        input = document.getElementById("inputBuscar");
        filtro = input.value.toUpperCase();
        tabla = document.getElementById("mitabla");
        tr = tabla.getElementsByTagName("tr");

        // Iterar sobre las filas de la tabla
        for (i = 0; i < tr.length; i++) {
            // Obtener todas las celdas de la fila
            var celdas = tr[i].getElementsByTagName("td");
            var coincidencia = false;

            // Iterar sobre las celdas de la fila
            for (var j = 0; j < celdas.length; j++) {
                td = celdas[j];

                if (td) {
                    txtValue = td.textContent || td.innerText;

                    // Comparar el valor de la celda con la cadena de búsqueda
                    if (txtValue.toUpperCase().indexOf(filtro) > -1) {
                        coincidencia = true;
                        break; // Si hay una coincidencia, no es necesario seguir revisando las otras celdas
                    }
                }
            }

            // Mostrar o ocultar la fila según la coincidencia
            if (coincidencia) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }

    function imprimirPagina() {
            // Simular la pulsación de teclas Ctrl + P
            window.addEventListener('keydown', function(e) {
                if ((e.ctrlKey || e.metaKey) && e.key === 'p') {
                    // Lógica para imprimir la página
                    window.print();
                    e.preventDefault(); // Evitar que el navegador maneje la combinación de teclas
                }
            });

            // Disparar el evento de teclado programáticamente
            var event = new KeyboardEvent('keydown', {
                bubbles: true,
                cancelable: true,
                key: 'p',
                ctrlKey: true,
            });

            window.dispatchEvent(event);
        }

function generarPDF() {
    console.log("Generando PDF...");
    var doc = new jsPDF();

    doc.text("Listado de Clientes", 20, 10);

    var tabla = document.getElementById("mitabla");

    var options = {
        theme: "grid",
        styles: {
            fontSize: 8, // Ajusta el tamaño de la fuente según tus necesidades
            cellPadding: 2,
            halign: "center",
        },
        margin: { top: 20 }, // Ajusta el margen superior según tus necesidades
    };

    doc.autoTable({ html: tabla, ...options });

    doc.save("listado_clientes.pdf");
}

</script> 
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>