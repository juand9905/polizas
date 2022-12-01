<x-app-layout>
    <div class="menu">
        <div class="menu-container">
            <div class="menu-descriptor">
                <h3>PAGOS</h3>
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

    <article class="container">
        <section class="row">
            <div class="col">

                <table class="table table-bordered table-striped" style="text-align:center;">
                    <thead>
                    <tr>
                        <th>Método Pago</th>
                        <th>Banco</th>
                        <th>Email</th>
                        <th>Documento Registro</th>
                        <th>Vin</th>
                        <th>Número Póliza</th>
                        <th>Detalles</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pagos as $pago)
                        <tr>
                            <td>{{$pago->pago_method}}</td>
                            <td>{{$pago->pago_bank}}</td>
                            <td>{{$pago->pago_email}}</td>
                            <td>{{$pago->registro_document}}</td>
                            <td>{{$pago->vehiculo_vin}}</td>
                            <td>{{$pago->poliza_number}}</td>

                            <td><a href="/pagos/{{$pago->id}}" class="btn btn-primary">Detalles</a></td>
                            <td><a href="/pagos/{{$pago->id}}/edit" class="btn btn-success">Editar</a></td>
                            <td>
                                <form action="/pagos/{{$pago->id}}" method="POST">
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
                    <a href="/pagos/create" class="btn btn-primary text-center">Crear Nuevo Pago</a>
                </div>
            </section>
        </section>
    </article>
</x-app-layout>
