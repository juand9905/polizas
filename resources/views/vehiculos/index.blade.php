<x-app-layout>
    <div class="menu">
        <div class="menu-container">
            <div class="menu-descriptor">
                <h3>VEHICULOS</h3>
            </div>

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

    <article class="container">
        <section class="row">
            <div class="col">

                <table class="table table-bordered table-striped" style="text-align:center;">
                    <thead>
                    <tr>
                        <th>Tipo Vehiculo</th>
                        <th>Placa</th>
                        <th>Modelo</th>
                        <th>Marcas</th>
                        <th>Vin</th>
                        <th>Documento</th>
                        <th>Detalles</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($vehiculos as $vehiculo)
                        <tr>
                            <td>{{$vehiculo->vehiculo_type}}</td>
                            <td>{{$vehiculo->vehiculo_nameplate}}</td>
                            <td>{{$vehiculo->vehiculo_model}}</td>
                            <td>{{$vehiculo->vehiculo_brand}}</td>
                            <td>{{$vehiculo->vehiculo_vin}}</td>
                            <td>{{$vehiculo->registro_document}}</td>

                            <td><a href="/vehiculos/{{$vehiculo->id}}" class="btn btn-primary">Detalles</a></td>
                            <td><a href="/vehiculos/{{$vehiculo->id}}/edit" class="btn btn-success">Editar</a></td>
                            <td>
                                <form action="/vehiculos/{{$vehiculo->id}}" method="POST">
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
                    <a href="/vehiculos/create" class="btn btn-primary text-center">Crear Nuevo Vehiculo</a>
                </div>
            </section>
        </section>
    </article>
</x-app-layout>
