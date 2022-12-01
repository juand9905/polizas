<x-app-layout>
    <div class="menu">
        <div class="menu-container">
            <div class="menu-descriptor">
                <h3 >DETALLES  ({{$polisa->poliza_type }} - {{$polisa->poliza_number }})</h3>
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
                            <img src="https://www.gravatar.com/avatar/{{md5($polisa->poliza_type)}}?d=robohash&s=400" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">

                                <p class="card-text"><b>Tipo Poliza: </b>  {{$polisa->poliza_type}}</p>
                                <p class="card-text"><b>Numero Poliza: </b>  {{$polisa->poliza_number}}</p>
                                <p class="card-text"><b>Fecha Vencimiento: </b>  {{$polisa->poliza_terminatedate}}</p>
                                <p class="card-text"><b>Placa: </b>  {{$polisa->vehiculo_nameplate}}</p>
                                <p class="card-text"><b>Placa: </b>  {{$polisa->vehiculo_brand}}</p>
                                <p class="card-text"><b>Placa: </b>  {{$polisa->vehiculo_vin}}</p>
                                <p class="card-text"><b>Documento: </b>  {{$polisa->registro_document}}</p>
                                <p class="card-text"><b>Documento: </b>  {{$polisa->registro_firstname}}</p>
                                <p class="card-text"><b>Documento: </b>  {{$polisa->registro_lastname}}</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section>
            <section class="row">
                <div class="col d-grid">
                    <a href="/polisas" class="btn btn-success text-center">Menu</a>
                </div>
            </section>
        </section>
    </article>
</x-app-layout>



