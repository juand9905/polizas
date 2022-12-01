<x-app-layout>
    <div class="menu">
        <div class="menu-container">
            <div class="menu-descriptor">
                <h3 >CREAR REGISTRO</h3>
            </div>
            <nav class="menu-nav">

            </nav>
        </div>
    </div>

    <link rel="stylesheet" href="/css/main.css">

    <style>
        .btn-primary{
            background-color: #0033A0;
        }
    </style>
<br>

    <link href="{{asset('css/prueba.css')}}" rel="stylesheet" >
    <article class="container">
        <section>
            <form action="/registros" class="row" method="POST">
                @csrf
                <div class="mb-3 col-6">
                    <label for="name" class="form-label">Tipo Documento</label>
                    <div class="input-group mb-3">
                        <select class="form-select" id="registro_documenttype" name="registro_documenttype">
                            <option class="fst-italic text-muted" disabled selected>Seleccionar...</option>
                            <option value="Tarjeta Identidad">Tarjeta Identidad</option>
                            <option value="Cedula">Cedula</option>
                            <option value="Pasaporte">Pasaporte</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 col-6">
                    <label for="registro_document" class="form-label">Documento</label>
                    <input type="text" class="form-control" id="registro_document" name="registro_document" value="{{old('registro_document')}}">
                </div>
                <div class="mb-3 col-6">
                    <label for="registro_firstname" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="registro_firstname" name="registro_firstname" value="{{old('registro_firstname')}}">
                </div>
                <div class="mb-3 col-6">
                    <label for="registro_lastname" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="registro_lastname" name="registro_lastname" value="{{old('registro_lastname')}}">
                </div>
                <div class="mb-3 col-6">
                    <label for="registro_email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="registro_email" name="registro_email" value="{{old('registro_email')}}">
                </div>
                <div class="mb-3 col-6">
                    <label for="registro_phone" class="form-label">Telefono</label>
                    <input type="text" class="form-control" id="registro_phone" name="registro_phone" value="{{old('registro_phone')}}">
                </div>
                <div class="mb-3 col-12 d-grid">
                    <input type="submit" value="Guardar" class="btn btn-primary text-center">
                </div>
            </form>
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <section>
                <section class="row">
                    <div class="col d-grid">
                        <a href="/registros" class="btn btn-success text-center">Menu</a>
                    </div>
                </section>
            </section>
        </section>
    </article>
</x-app-layout>

