<x-app-layout>
    <div class="menu">
        <div class="menu-container">
            <div class="menu-descriptor">
                <h3 >REGISTROS</h3>
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
        <section class="row ">
            <div class="col">

                <table class="table table-bordered table-striped" style="text-align:center;">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Email</th>
                        <th>Tipo Documento</th>
                        <th>Numero Documento</th>
                        <th>Telefono</th>
                        <th>Show</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($registros as $registro)
                        <tr>
                            <td>{{$registro->registro_firstname}}</td>
                            <td>{{$registro->registro_lastname}}</td>
                            <td>{{$registro->registro_email}}</td>
                            <td>{{$registro->registro_documenttype}}</td>
                            <td>{{$registro->registro_document}}</td>
                            <td>{{$registro->registro_phone}}</td>

                            <td><a href="/registros/{{$registro->id}}" class="btn btn-primary">Detalles</a></td>
                            <td><a href="/registros/{{$registro->id}}/edit" class="btn btn-success">Editar</a></td>
                            <td>
                                <form action="/registros/{{$registro->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input
                                        type="submit"
                                        value="Eliminar"
                                        class="btn btn-danger"
                                        onclick="return confirm('Confirmar si desea eliminarlo?')"
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
                    <a href="/registros/create" class="btn btn-primary text-center">Crear Nuevo Registro</a>
                </div>
            </section>
        </section>
    </article>
</x-app-layout>
