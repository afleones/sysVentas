<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Reporte de Articulos</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style>                                       
            .izuierda{
                float:left;
            }
            .derecha{
                float:right;
                padding: 2px;
            }            
            .cabeza {               
                position: fixed;
                top: 0cm;
                left: 0cm;
                right: 0cm;
                height: 2.3cm;
                background-color: #2a0927;
                color: white;
                text-align: center;
                line-height: 30px;                
            }
            .espasio{
                padding: 1%;
            }
            .salto{
                margin-bottom: 25px;
            }                
            footer {
                position: fixed;
                bottom: 0cm;
                left: 0cm;
                right: 0cm;
                height: 2cm;
                background-color: #2a0927;
                color: white;
                text-align: center;
                line-height: 35px;
            }
        </style>
    </head>       
    <body>
        <header class="cabeza">
            <h1 class="text-center centrar">Lista de Articulos</h1>
            <div class="">   
                <span class="derecha"> {{now()}} </span>      
            </div><br>
        </header><br><br><br><br>                            
            <div class="row espacio">
                <div class="col-md-12">
                    <table class="table table-bordered table-striped table-sm">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Nombre</th>
                                <th>Categoría</th>
                                <th>Precio Venta</th>
                                <th>Stock</th>
                                <th>Descripción</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($articulos as $a)
                            <tr>                      
                                <td> {{$a->codigo}} </td>
                                <td> {{$a->nombre}} </td>
                                <td> {{$a->nombre_categoria}} </td>
                                <td> {{$a->precio_venta}} </td>
                                <td> {{$a->stock}} </td>
                                <td> {{$a->descripcion}} </td>
                                <td> {{$a->condicion?'Activo':'Desactivado'}} </td>
                            </tr>      
                        @endforeach                          
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="izquierda">
                <p class=""> <strong class=""> Total de Registros: </strong> {{$cont}} </p>
            </div>    
        <footer>
            <h1 class="text-center">Jamesgiiraldo@gmail.com</h1>
        </footer>
    </body>
</html>
