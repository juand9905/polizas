<x-app-layout>
    <div class="menu">
        <div class="menu-container">
            <div class="menu-descriptor">
                <h3 >EDITAR   ({{$polisa->poliza_type }} - {{$polisa->poliza_number }})</h3>
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
            <form action="/polisas/{{$polisa->id}}" class="row" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3 col-6">
                    <label for="name" class="form-label">Tipo Póliza</label>
                    <div class="input-group mb-3">
                        <select class="form-select" id="poliza_type" name="poliza_type">
                            <option class="fst-italic text-muted" disabled selected>Seleccionar...</option>
                            <option value="Plan Ligero" @if($polisa->poliza_type == "Plan Ligero")selected @endif >Plan Ligero</option>
                            <option value="Plan Clásico" @if($polisa->poliza_type == "Plan Clásico")selected @endif>Plan Clásico</option>
                            <option value="Plan Estándar" @if($polisa->poliza_type == "Plan Estándar")selected @endif>Plan Estándar</option>
                            <option value="Plan Premium" @if($polisa->poliza_type == "Plan Premium")selected @endif>Plan Premium</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 col-6">
                    <label for="poliza_number" class="form-label">Número Póliza</label>
                    <input type="text" class="form-control" id="poliza_number" name="poliza_number" value="{{old('poliza_number',$polisa->poliza_number)}}">
                </div>
                <div class="mb-3 col-6">
                    <label for="poliza_terminatedate" class="form-label">Fecha Vencimiento</label>
                    <input type="date" class="form-control" id="poliza_terminatedate" name="poliza_terminatedate" value="{{old('poliza_terminatedate',$polisa->poliza_terminatedate)}}">
                </div>

                <div class="mb-3 col-6">
                    <label for="vehiculo_nameplate" class="form-label">Placa Vehículo</label>
                    <input type="text" class="form-control" id="vehiculo_nameplate" name="vehiculo_nameplate" value="{{old('vehiculo_nameplate',$polisa->vehiculo_nameplate)}}">
                </div>
                <div class="mb-3 col-6">
                    <label for="vehiculo_brand" class="form-label">Marca Vehículo</label>
                    <input type="text" class="form-control" id="vehiculo_brand" name="vehiculo_brand" value="{{old('vehiculo_brand',$polisa->vehiculo_brand)}}">
                </div>
                <div class="mb-3 col-6">
                    <label for="vehiculo_vin" class="form-label">Vin Vehículo</label>
                    <input type="text" class="form-control" id="vehiculo_vin" name="vehiculo_vin" value="{{old('vehiculo_vin',$polisa->vehiculo_vin)}}">
                </div>

                <div class="mb-3 col-6">
                    <label for="registro_document" class="form-label">Documento Registro</label>
                    <input type="text" class="form-control" id="registro_document" name="registro_document" value="{{old('registro_document',$polisa->registro_document)}}">
                </div>
                <div class="mb-3 col-6">
                    <label for="registro_firstname" class="form-label">Nombre Registro</label>
                    <input type="text" class="form-control" id="registro_firstname" name="registro_firstname" value="{{old('registro_firstname',$polisa->registro_firstname)}}">
                </div>
                <div class="mb-3 col-6">
                    <label for="registro_lastname" class="form-label">Apellidos Registro</label>
                    <input type="text" class="form-control" id="registro_lastname" name="registro_lastname" value="{{old('registro_lastname',$polisa->registro_lastname)}}">
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
                        <a href="/polisas" class="btn btn-success text-center">Menu</a>
                    </div>
                </section>
            </section>
        </section>
    </article>
</x-app-layout>
