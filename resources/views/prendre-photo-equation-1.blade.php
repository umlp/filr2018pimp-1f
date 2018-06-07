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
                        Equation du 1er degrée...
                    </h1>
                    <form class="form-horizontal" action="afficher-resultat" method="post">
                        <div class="form-group has-feedback">
                            <label class="control-label col-sm-3">Prendre photo</label>
                            <div class="col-sm-9">
                              <input class="form-control" type="file" accept="image/*;capture=camera">
                            </div>
                        </div>
                        <div class="form-group has-feedback">
                            <div class="col-sm-12">
                                <input class="form-control" type="submit" value="Valider">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
