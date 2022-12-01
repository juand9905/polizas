<x-app-layout>
    <div class="menu">
        <div class="menu-container">
            <div class="menu-descriptor">
                <h3 >DETALLES  ({{$vehiculo->vehiculo_brand }} - {{$vehiculo->vehiculo_nameplate }})</h3>
            </div>
            <nav class="menu-nav">

            </nav>
        </div>
    </div>

    <link rel="stylesheet" href="/css/main.css">

    <style>
        .alert-primary{
            background-color: #0033A0;
            color: white;
        }
    </style>
    <article class="container">
        <br>
        <section class="row my-4">
            <div class="col-12">
                <div class="card mb-3" style="max-width: 540px; margin-left: 380px">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://www.gravatar.com/avatar/{{md5($vehiculo->vehiculo_nameplate)}}?d=robohash&s=400" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">

                                <p class="card-text"><b>Placa: </b>  {{$vehiculo->vehiculo_nameplate}}</p>
                                <p class="card-text"><b>Tipo de vehiculo: </b>  {{$vehiculo->vehiculo_type}}</p>
                                <p class="card-text"><b>Modelo: </b>  {{$vehiculo->vehiculo_model}}</p>
                                <p class="card-text"><b>Marca: </b>  {{$vehiculo->vehiculo_brand}}</p>
                                <p class="card-text"><b>Vin: </b>  {{$vehiculo->vehiculo_vin}}</p>
                                <p class="card-text"><b>Documento: </b>  {{$vehiculo->registro_document}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <section class="row">
                <div class="col d-grid">
                    <a href="/vehiculos" class="btn btn-success text-center">Menu</a>
                </div>
            </section>
        </section>
    </article>
</x-app-layout>
