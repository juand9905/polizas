<x-app-layout>
    <div class="menu">
        <div class="menu-container">
            <div class="menu-descriptor">
                <h3 >EDITAR   ({{$vehiculo->vehiculo_brand }} - {{$vehiculo->vehiculo_nameplate }})</h3>
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
    <article class="container">
        <section>
            <form action="/vehiculos/{{$vehiculo->id}}" class="row" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3 col-6">
                    <label for="name" class="form-label">Tipo Vehículo</label>
                    <div class="input-group mb-3">
                        <select class="form-select" id="vehiculo_type" name="vehiculo_type">
                            <option class="fst-italic text-muted" disabled selected>Seleccionar...</option>
                            <option value="Carro" @if($vehiculo->vehiculo_type == "Carro")selected @endif >Carro</option>
                            <option value="Camión" @if($vehiculo->vehiculo_type == "Camión")selected @endif>Camión</option>
                            <option value="Bus" @if($vehiculo->vehiculo_type == "Bus")selected @endif>Bus</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 col-6">
                    <label for="vehiculo_nameplate" class="form-label">Placa</label>
                    <input type="text" class="form-control" id="vehiculo_nameplate" name="vehiculo_nameplate" value="{{old('vehiculo_nameplate',$vehiculo->vehiculo_nameplate)}}">
                </div>
                <div class="mb-3 col-6">
                    <label for="vehiculo_model" class="form-label">Modelo</label>
                    <input type="text" class="form-control" id="vehiculo_model" name="vehiculo_model" value="{{old('vehiculo_model',$vehiculo->vehiculo_model)}}">
                </div>
                <div class="mb-3 col-6">
                    <label for="vehiculo_brand" class="form-label">Marca Vehículo</label>
                    <div class="input-group mb-3">
                        <select class="form-select" id="vehiculo_brand" name="vehiculo_brand">
                            <option class="fst-italic text-muted" disabled selected>Seleccionar...</option>
                            <option value="Suzuki" @if($vehiculo->vehiculo_brand == "Suzuki")selected @endif >Suzuki</option>
                            <option value="Wolkswagen" @if($vehiculo->vehiculo_brand == "Wolkswagen")selected @endif>Wolkswagen</option>
                            <option value="Toyota" @if($vehiculo->vehiculo_brand == "Toyota")selected @endif>Toyota</option>
                            <option value="Hyundai" @if($vehiculo->vehiculo_brand == "Hyundai")selected @endif >Hyundai</option>
                            <option value="Mazda" @if($vehiculo->vehiculo_brand == "Mazda")selected @endif>Mazda</option>
                            <option value="Chevrolet" @if($vehiculo->vehiculo_brand == "Chevrolet")selected @endif>Chevrolet</option>
                            <option value="Mercedes" @if($vehiculo->vehiculo_brand == "Mercedes")selected @endif>Mercedes</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 col-6">
                    <label for="vehiculo_vin" class="form-label">Vin</label>
                    <input type="text" class="form-control" id="vehiculo_vin" name="vehiculo_vin" value="{{old('vehiculo_vin',$vehiculo->vehiculo_vin)}}">
                </div>
                <div class="mb-3 col-6">
                    <label for="registro_document" class="form-label">Documento</label>
                    <input type="text" class="form-control" id="registro_document" name="registro_document" value="{{old('registro_document',$vehiculo->registro_document)}}">
                </div>
                <div class="mb-3 col-12 d-grid">
                    <input type="submit" value="Actualizar" class="btn btn-primary text-center">
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
                        <a href="/vehiculos" class="btn btn-success text-center">Menu</a>
                    </div>
                </section>
            </section>
        </section>
    </article>
</x-app-layout>
