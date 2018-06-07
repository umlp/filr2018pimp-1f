@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="/">Menu principal</a>
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')
                
                    <!-- Menu principal -->
                    <h1>
                        Aide
                    </h1>
                    <p class="lead">
                      Pour résoudre l'équation désirée, il suffit de sélectionner le bouton correspondant. Puis cliquez sur prendre une photo, cela va ouvrir l'application photo du système. Une fois l'image sélectionnée, cliquez sur valider et l'application vous montrera le résultat correspondant à son équation.
                    </p>
                    <p>                      
                      Vous pouvez revenir au menu principal à tout moment en cliquant sur le bouton 'manu principal' en haut de chaque écran.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
