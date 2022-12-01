<?php
$mysqli = new mysqli('localhost', 'root', '', 'polizas');
?>
<x-app-layout>
    <div class="menu">
        <div class="menu-container">
            <div class="menu-descriptor">
                <h3 >CREAR PÓLIZA</h3>
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
            <form action="/polisas" class="row" method="POST">
                @csrf
                <div class="mb-3 col-6">
                    <label for="poliza_type" class="form-label">Tipo Póliza</label>
                    <div class="input-group mb-3">
                        <select class="form-select" id="poliza_type" name="poliza_type">
                            <option class="fst-italic text-muted" disabled selected>Seleccionar...</option>
                            <option value="Plan Ligero">Plan Ligero</option>
                            <option value="Plan Clásico">Plan Clásico</option>
                            <option value="Plan Estándar">Plan Estándar</option>
                            <option value="Plan Premium">Plan Premium</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 col-6">
                    <label for="poliza_number" class="form-label">Numero Poliza</label>
                    <input type="text" class="form-control" id="poliza_number" name="poliza_number" value="{{old('poliza_number')}}">
                </div>
                <div class="mb-3 col-6">
                    <label for="poliza_terminatedate" class="form-label">Fecha Vencimiento</label>
                    <input type="date" class="form-control" id="poliza_terminatedate" name="poliza_terminatedate" value="{{old('poliza_terminatedate')}}">
                </div>
                <div class="mb-3 col-6">
                    <label for="vehiculo_nameplate" class="form-label">Placa Vehículo</label>
                    <select class="form-select" id="vehiculo_nameplate" name="vehiculo_nameplate">
                        <option value="0">Seleccione:</option>
                        <?php
                        $query = $mysqli -> query ("SELECT * FROM vehiculos");
                        while ($valores = mysqli_fetch_array($query)) {
                            echo '<option value="'.$valores['id'].'">'.$valores['vehiculo_nameplate'].'
                        </option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-3 col-6">
                    <label for="vehiculo_brand" class="form-label">Marca Vehículo</label>
                    <select class="form-select" id="vehiculo_brand" name="vehiculo_brand">
                        <option value="0">Seleccione:</option>
                        <?php
                        $query = $mysqli -> query ("SELECT * FROM vehiculos");
                        while ($valores = mysqli_fetch_array($query)) {
                            echo '<option value="'.$valores['id'].'">'.$valores['vehiculo_brand'].'
                        </option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-3 col-6">
                    <label for="vehiculo_vin" class="form-label">Vin Vehículo</label>
                    <select class="form-select" id="vehiculo_vin" name="vehiculo_vin">
                        <option value="0">Seleccione:</option>
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
                    <label for="registro_document" class="form-label">Documento Registro</label>
                    <select class="form-select" id="registro_document" name="registro_document">
                        <option value="0">Seleccione:</option>
                        <?php
                        $query = $mysqli -> query ("SELECT * FROM registros");
                        while ($valores = mysqli_fetch_array($query)) {
                            echo '<option value="'.$valores['id'].'">'.$valores['registro_document'].'
                        </option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-3 col-6">
                    <label for="registro_firstname" class="form-label">Nombre Registro</label>
                    <select class="form-select" id="registro_firstname" name="registro_firstname">
                        <option value="0">Seleccione:</option>
                        <?php
                        $query = $mysqli -> query ("SELECT * FROM registros");
                        while ($valores = mysqli_fetch_array($query)) {
                            echo '<option value="'.$valores['id'].'">'.$valores['registro_firstname'].'
                        </option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-3 col-6">
                    <label for="registro_lastname" class="form-label">Apellidos Registro</label>
                    <select class="form-select" id="registro_lastname" name="registro_lastname">
                        <option value="0">Seleccione:</option>
                        <?php
                        $query = $mysqli -> query ("SELECT * FROM registros");
                        while ($valores = mysqli_fetch_array($query)) {
                            echo '<option value="'.$valores['id'].'">'.$valores['registro_lastname'].'
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
                        <a href="/polisas" class="btn btn-success text-center">Menu</a>
                    </div>
                </section>
            </section>
        </section>
    </article>
</x-app-layout>

