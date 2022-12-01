<?php
$mysqli = new mysqli('localhost', 'root', '', 'polizas');
?>

<x-app-layout>
    <div class="menu">
        <div class="menu-container">
            <div class="menu-descriptor">
                <h3 >CREAR VEHÍCULO</h3>
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
            <form action="/vehiculos" class="row" method="POST">
                @csrf
                <div class="mb-3 col-6">
                    <label for="vehiculo_nameplate" class="form-label">Placa</label>
                    <input type="text" class="form-control" id="vehiculo_nameplate" name="vehiculo_nameplate" value="{{old('vehiculo_nameplate')}}">
                </div>
                <div class="mb-3 col-6">
                    <label for="vehiculo_type" class="form-label">Tipo Vehiculo</label>
                    <div class="input-group mb-3">
                        <select class="form-select" id="vehiculo_type" name="vehiculo_type">
                            <option class="fst-italic text-muted" disabled selected>Seleccionar...</option>
                            <option value="Carro">Carro</option>
                            <option value="Camion">Camion</option>
                            <option value="Bus">Bus</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 col-6">
                    <label for="vehiculo_model" class="form-label">Modelo</label>
                    <input type="text" class="form-control" id="vehiculo_model" name="vehiculo_model" value="{{old('vehiculo_model')}}">
                </div>
                <div class="mb-3 col-6">
                    <label for="vehiculo_brand" class="form-label">Marca Vehículo</label>
                    <div class="input-group mb-3">
                        <select class="form-select" id="vehiculo_brand" name="vehiculo_brand">
                            <option class="fst-italic text-muted" disabled selected>Seleccionar...</option>
                            <option value="Suzuki">Suzuki</option>
                            <option value="Wolkswagen">Wolkswagen</option>
                            <option value="Toyota">Toyota</option>
                            <option value="Hyundai">Hyundai</option>
                            <option value="Mazda">Mazda</option>
                            <option value="Chevrolet">Chevrolet</option>
                            <option value="Mercedes">Mercedes</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 col-6">
                    <label for="vehiculo_vin" class="form-label">Vin</label>
                    <input type="text" class="form-control" id="vehiculo_vin" name="vehiculo_vin" value="{{old('vehiculo_vin')}}">
                </div>
                <!--
                <div class="mb-3 col-6">
                    <label for="registro_document" class="form-label">Documento</label>
                    <input type="text" class="form-control" id="registro_document" name="registro_document" value="{{old('registro_document')}}">
                </div>
                -->

                <div class="mb-3 col-6">
                    <label for="registro_document" class="form-label">Documento</label>
                    <select class="form-select" id="registro_document" name="registro_document">
                        <option value="0">Seleccione:</option>
                        <?php
                        $query = $mysqli -> query ("SELECT * FROM registros");
                        while ($valores = mysqli_fetch_array($query)) {
                            echo '<option value="'.$valores['id'].'">'.$valores['registro_document'].' - '.$valores['registro_firstname'].'
                        </option>';
                        }
                        ?>
                    </select>
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
                        <a href="/vehiculos" class="btn btn-success text-center">Menu</a>
                    </div>
                </section>
            </section>
        </section>
    </article>
</x-app-layout>
