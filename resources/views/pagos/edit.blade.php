<x-app-layout>
    <div class="menu">
        <div class="menu-container">
            <div class="menu-descriptor">
                <h3 >EDITAR   ({{$pago->pago_method }} - {{$pago->pago_email }})</h3>
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
            <form action="/pagos/{{$pago->id}}" class="row" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3 col-6">
                    <label for="pago_method" class="form-label">Método Pago</label>
                    <div class="input-group mb-3">
                        <select class="form-select" id="pago_method" name="pago_method">
                            <option class="fst-italic text-muted" disabled selected>Seleccionar...</option>
                            <option value="Tarjeta de Debito/Credito" @if($pago->pago_method == "Tarjeta de Debito/Credito")selected @endif >Tarjeta de Debito/Credito</option>
                            <option value="Transferencia" @if($pago->pago_method == "Transferencia")selected @endif>Transferencia</option>
                            <option value="PSE" @if($pago->pago_method == "PSE")selected @endif>PSE</option>
                            <option value="Efectivo" @if($pago->pago_method == "Efectivo")selected @endif>Efectivo</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 col-6">
                    <label for="pago_bank" class="form-label">Banco</label>
                    <div class="input-group mb-3">
                        <select class="form-select" id="pago_bank" name="pago_bank">
                            <option class="fst-italic text-muted" disabled selected>Seleccionar...</option>
                            <option value="Bancolombia" @if($pago->pago_bank == "Bancolombia")selected @endif >Bancolombia</option>
                            <option value="Davivienda" @if($pago->pago_bank == "Davivienda")selected @endif>Davivienda</option>
                            <option value="Nequi" @if($pago->pago_bank == "Nequi")selected @endif>Nequi</option>
                            <option value="Daviplata" @if($pago->pago_bank == "Daviplata")selected @endif>Daviplata</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 col-6">
                    <label for="pago_email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="pago_email" name="pago_email" value="{{old('pago_email',$pago->pago_email)}}">
                </div>
                <div class="mb-3 col-6">
                    <label for="registro_document" class="form-label">Documento Registro</label>
                    <input type="text" class="form-control" id="registro_document" name="registro_document" value="{{old('registro_document',$pago->registro_document)}}">
                </div>
                <div class="mb-3 col-6">
                    <label for="vehiculo_vin" class="form-label">Vin</label>
                    <input type="text" class="form-control" id="vehiculo_vin" name="vehiculo_vin" value="{{old('vehiculo_vin',$pago->vehiculo_vin)}}">
                </div>
                <div class="mb-3 col-6">
                    <label for="poliza_number" class="form-label">Número Póliza</label>
                    <input type="text" class="form-control" id="poliza_number" name="poliza_number" value="{{old('poliza_number',$pago->poliza_number)}}">
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
                        <a href="/pagos" class="btn btn-success text-center">Menu</a>
                    </div>
                </section>
            </section>
        </section>
    </article>
</x-app-layout>
