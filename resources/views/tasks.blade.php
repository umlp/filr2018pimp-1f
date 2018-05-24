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
                    <div class="row">
                        <div class="sm-1"></div>
                        <div class="sm-2">
                            <button type="button" class="btn btn-info">Aide</button>
                        </div>
                        <div class="sm-9"></div>
                    </div>
                    <div class="row">
                        <div class="btn-group btn-group-justified" role="group">
                          <div class="sm-1"></div>
                          <div class="sm-4 btn-group" role="group">
                            <button type="button" class="btn btn-primary">Equation du 1er degrée</button>
                          </div>
                          <div class="sm-2"></div>
                          <div class="sm-4 btn-group" role="group">
                            <button type="button" class="btn btn-primary">Equation du 2éme degrée</button>
                          </div>
                          <div class="sm-1"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="btn-group btn-group-justified" role="group">
                          <div class="sm-1"></div>
                          <div class="sm-4 btn-group" role="group">
                            <button type="button" class="btn btn-primary">Derivée</button>
                          </div>
                          <div class="sm-2"></div>
                          <div class="sm-4 btn-group" role="group">
                            <button type="button" class="btn btn-primary">Primitive</button>
                          </div>
                          <div class="sm-1"></div>
                        </div>
                    </div>   
                    <div class="row">
                        <div class="sm-12">
                            <button type="button" class="btn btn-default">Tracer une fonction</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
