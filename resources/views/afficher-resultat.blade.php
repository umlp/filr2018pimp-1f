@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Menu principal
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')
                
                    <!-- Menu principal -->
                    <h1>
                        Résultat du equation <strong>( x<sup>2</sup>+2x-3 )'</strong>
                    </h1>
                    <p class="bg-primary lead">
                      <strong>2( x+1 )</strong>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
