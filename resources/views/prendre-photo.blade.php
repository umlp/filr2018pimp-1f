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
                    <form action="traiter-image" method="post">
                      <input type="file" accept="image/*;capture=camera">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
