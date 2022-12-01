<?php
$mysqli = new mysqli('localhost', 'root', '', 'polizas');
?>

<x-app-layout>
    <div class="menu">
        <div class="menu-container">
            <div class="menu-descriptor">
                <h3 >CREAR PAGO</h3>
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
            <form action="/pagos" class="row" method="POST">
                @csrf
                <div class="mb-3 col-6">
                    <label for="pago_method" class="form-label">Método Pago</label>
                    <div class="input-group mb-3">
                        <select class="form-select" id="pago_method" name="pago_method">
                            <option class="fst-italic text-muted" disabled selected>Seleccionar...</option>
                            <option value="Tarjeta de Debito/Credito">Tarjeta de Debito/Credito</option>
                            <option value="Transferencia">Transferencia</option>
                            <option value="PSE">PSE</option>
                            <option value="Efectivo">Efectivo</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 col-6">
                    <label for="pago_bank" class="form-label">Banco</label>
                    <div class="input-group mb-3">
                        <select class="form-select" id="pago_bank" name="pago_bank">
                            <option class="fst-italic text-muted" disabled selected>Seleccionar...</option>
                            <option value="Bancolombia">Bancolombia</option>
                            <option value="Davivienda">Davivienda</option>
                            <option value="Nequi">Nequi</option>
                            <option value="Daviplata">Daviplata</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 col-6">
                    <label for="pago_email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="pago_email" name="pago_email" value="{{old('pago_email')}}">
                </div>
                <div class="mb-3 col-6">
                    <label for="registro_document" class="form-label">Documento Registro</label>
                    <select class="form-select" id="registro_document" name="registro_document">
                        <option value="0" disabled selected>Seleccionar...</option>
                        <?php
                        $query = $mysqli -> query ("SELECT * FROM registros");
                        while ($valores = mysqli_fetch_array($query)) {
                            echo '<option value="'.$valores['id'].'">'.$valores['registro_document'].' - '.$valores['registro_firstname'].'
                        </option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-3 col-6">
                    <label for="vehiculo_vin" class="form-label">Vin Vehículo</label>
                    <select class="form-select" id="vehiculo_vin" name="vehiculo_vin">
                        <option value="0" disabled selected>Seleccionar...</option>
                        <?php
                        $query = $mysqli -> query ("SELECT * FROM vehiculos");
                        while ($valores = mysqli_fetch_array($query)) {
                            echo '<option value="'.$valores['id'].'">'.$valores['vehiculo_vin'].'
                        </option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-3 col-6">
                    <label for="poliza_number" class="form-label">Número Póliza</label>
                    <select class="form-select" id="poliza_number" name="poliza_number">
                        <option value="0" disabled selected>Seleccionar...</option>
                        <?php
                        $query = $mysqli -> query ("SELECT * FROM polizas");
                        while ($valores = mysqli_fetch_array($query)) {
                            echo '<option value="'.$valores['id'].'">'.$valores['poliza_number'].'
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
                        <a href="/pagos" class="btn btn-success text-center">Menu</a>
                    </div>
                </section>
            </section>
        </section>
    </article>
</x-app-layout>
