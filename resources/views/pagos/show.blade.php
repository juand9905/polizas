<x-app-layout>
    <div class="menu">
        <div class="menu-container">
            <div class="menu-descriptor">
                <h3 >DETALLES  ({{$pago->pago_method }} - {{$pago->pago_email }})</h3>
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
    <br>
    <article class="container">
        <section class="row my-4">
            <div class="col-12">
                <div class="card mb-3" style="max-width: 540px; margin-left: 380px">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://www.gravatar.com/avatar/{{md5($pago->pago_method)}}?d=robohash&s=400" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">

                                <p class="card-text"><b>Método Pago: </b>  {{$pago->pago_method}}</p>
                                <p class="card-text"><b>Banco: </b>  {{$pago->pago_bank}}</p>
                                <p class="card-text"><b>Email: </b>  {{$pago->pago_email}}</p>
                                <p class="card-text"><b>Documento Registro: </b>  {{$pago->registro_document}}</p>
                                <p class="card-text"><b>Vin: </b>  {{$pago->vehiculo_vin}}</p>
                                <p class="card-text"><b>Número Póliza: </b>  {{$pago->poliza_number}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <section class="row">
                <div class="col d-grid">
                    <a href="/pagos" class="btn btn-success text-center">Menu</a>
                </div>
            </section>
        </section>
    </article>
</x-app-layout>
