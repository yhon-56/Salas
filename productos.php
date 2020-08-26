
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>REGISTRO DE PRODUCTOS</title>
</head>
<body>
    <di id="formulario">
        <form>
            <center>
                <h3>FORMULARIO DE REGISTRO DE PRODUCTOS</h3>
                <div class="contenedor"> 

                    <table >
                        <tr><td><font face="Calibri" color="black" size="5">ID</td> <td><input type="text" id="id_producto"></td></tr>
                            <tr><td><font face="Calibri" color="black" size="5">CODIGO DEL PRODUCTO</td> <td><input type="text" id="referencia"></td></tr>
                                <tr><td><font face="Calibri" color="black" size="5">NOMBRE DEL PRODUCTO</td> <td><input type="text" id="descripcion"></td></tr>
                                    <tr><td><font face="Calibri" color="black" size="5">PRECIO DEL PRODUCTO</td> <td><input type="text" id="precio"></td></tr>
                                        <tr><td colspan="2" align="center"><button type="button" class="boton1" onclick="RegistrarProducto()" id="REGISTRAR">REGISTRAR</button>
                                            <button type="button" class="boton1" onclick="listarProducto()">LISTAR</button>
                                            <button type="button" class="boton1" onclick="ActualizarProducto()">ACTUALIZAR</button>
                                        </td></tr>
                                    </table>
                                </div>
                                <div id="respuesta"> </div>
                            </center>
                        </form>

                        <hr>
                        <center>
                            <div id="tablaproductos1">
                               <table  id="tablaproductos">
                                   <center> <caption style="color: black">PRODUCTOS TIENDA ONLINE</caption></center>
                                   <thead>
                                     <tr >                    <th>ID</th>
                                        <th >Referencia</th>
                                        <th>Precio</th>
                                        <th>Descripcion</th>
                                        <th>Eliminar</th>
                                        <th>Seleccionar</th>
                                    </tr>
                                </thead>
                                <tbody id="ListaProductos"> </tbody>
                            </table>
                        </div>
                    </center>
                    <center>
                        <hr>
                    </center>
                </di>
                <button type="button" class="boton1" onclick="Nuevo_Producto()">+</button>
                <div id="Mostrar"><button type="button" class="boton1" onclick="Nuevo_Producto2()">-</button></div>
            </body>
            <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
            <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
            <script src="js/bootstrap.min.js"></script>
            <script>
                $(document).ready(function(){
                    $("#formulario").show();
                });

                function Nuevo_Producto(){
                 $("#Mostrar").show(true); 
                 $("#formulario").show(true);
             }
             function Nuevo_Producto2(){
                 $("#Mostrar").hide();
                 $("#formulario").hide();
             }

             $(document).ready( function () {
                $('#myTable').DataTable();
            } );
        </script>
        </html>
