<x-app-layout>
    <div class="menu">
        <div class="menu-container">
            <div class="menu-descriptor">
                <h3 >DETALLES  ({{$registro->registro_firstname }} - {{$registro->registro_email }})</h3>
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
                            <img src="https://www.gravatar.com/avatar/{{md5($registro->email_hashed)}}?d=robohash&s=400" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p class="card-title">{{$registro->registro_firstname }} {{$registro->registro_lastname }} <span class="badge rounded-pill bg-primary">{{$registro->id}}</span></p>
                                <p class="card-text"><b>Tipo de Documento: </b>  {{$registro->registro_documenttype}}</p>
                                <p class="card-text"><b>Documento: </b>  {{$registro->registro_document}}</p>
                                <p class="card-text"><b>Email: </b>  {{$registro->registro_email}}</p>
                                <p class="card-text"><b>Telefono: </b>  {{$registro->registro_phone}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <section class="row">
                <div class="col d-grid">
                    <a href="/registros" class="btn btn-success text-center">Menu</a>
                </div>
            </section>
        </section>
    </article>
</x-app-layout>

