<x-app-layout>
    <div class="menu">
        <div class="menu-container">
            <div class="menu-descriptor">
                <h3>POLIZAS</h3>
            </div>
            <nav class="menu-nav">

            </nav>
        </div>
    </div>

    <br>

    <link rel="stylesheet" href="/css/main.css">

    <style>
        .btn-primary{
            background-color: #0033A0;
        }
    </style>

    <!--
    <article class="container">
        <section class="row">
            <h1 class="col alert alert-success text-center">Categories</h1>
        </section>
    </article>
    -->

    <article class="container-fluid">
        <section class="row">
            <div class="col">

                <table class="table table-bordered table-striped" style="text-align:center;">                    <thead>
                    <tr>
                        <th>Tipo Poliza</th>
                        <th>Numero Poliza</th>
                        <th>Fecha Vencimiento</th>
                        <th>Placa Vehiculo</th>
                        <th>Marca Vehiculo</th>
                        <th>Vin Vehiculo</th>
                        <th>Documento Registro</th>
                        <th>Nombre Registro</th>
                        <th>Apellidos Registro</th>
                        <th>Detalles</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($polisas as $polisa)
                        <tr>
                            <td>{{$polisa->poliza_type}}</td>
                            <td>{{$polisa->poliza_number}}</td>
                            <td>{{$polisa->poliza_terminatedate}}</td>
                            <td>{{$polisa->vehiculo_nameplate}}</td>
                            <td>{{$polisa->vehiculo_brand}}</td>
                            <td>{{$polisa->vehiculo_vin}}</td>
                            <td>{{$polisa->registro_document}}</td>
                            <td>{{$polisa->registro_firstname}}</td>
                            <td>{{$polisa->registro_lastname}}</td>


                            <td><a href="/polisas/{{$polisa->id}}" class="btn btn-primary">Detalles</a></td>
                            <td><a href="/polisas/{{$polisa->id}}/edit" class="btn btn-success">Editar</a></td>
                            <td>
                                <form action="/polisas/{{$polisa->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input
                                        type="submit"
                                        value="Eliminar"
                                        class="btn btn-danger"
                                        onclick="return confirm('Seguro desea eliminarlo?')"
                                    >
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section>

        <section>
            <section class="row">
                <div class="col d-grid">
                    <a href="/polisas/create" class="btn btn-primary text-center">Crear Nueva Poliza</a>
                </div>
            </section>
        </section>
    </article>
</x-app-layout>


