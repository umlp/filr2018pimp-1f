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
                    <form class="form-horizontal" action="traiter-image" method="post">
                        <div class="form-group has-success has-feedback">
                          <input class="form-control" type="file" accept="image/*;capture=camera">
                          <input class="form-control" type="submit" value="Valider">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
