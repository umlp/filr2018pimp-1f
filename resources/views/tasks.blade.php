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
                    <form class="form-horizontal">
                        <div class="form-group has-feedback">
                            <button type="button" class="btn btn-info btn-block" onclick="location.href='https://equasnap.herokuapp.com/aide';">
                                Aide
                            </button>
                        </div>
                        <div class="form-group has-feedback">
                            <div class="sm-1"></div>
                            <div class="sm-10">
                                <div class="btn-group btn-group-justified" role="group">
                                  <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-primary" onclick="location.href='https://equasnap.herokuapp.com/prendre-photo-equation-1';">
                                        <img class="img-thumbnail" src="https://raw.githubusercontent.com/umlp/filr2018pimp-1f/master/resources/assets/Screenshot_2018-05-24_%2B22%3A58%3A58.png" style="display:block;text-align: center;margin-left: auto;margin-right: auto;height:100px">
                                        Equation du 1er degrée
                                    </button>
                                  </div>
                                  <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-primary" onclick="location.href='https://equasnap.herokuapp.com/prendre-photo-equation-2';">
                                        <img class="img-thumbnail" src="https://raw.githubusercontent.com/umlp/filr2018pimp-1f/master/resources/assets/Screenshot_2018-05-24_%2B22%3A58%3A11.png" style="display:block;text-align: center;margin-left: auto;margin-right: auto;height:100px">
                                        Equation du 2éme degrée
                                    </button>
                                  </div>
                                </div>
                                <div class="btn-group btn-group-justified" role="group">
                                  <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-primary" onclick="location.href='https://equasnap.herokuapp.com/prendre-photo-derivee';">
                                        <img class="img-thumbnail" src="https://raw.githubusercontent.com/umlp/filr2018pimp-1f/master/resources/assets/Screenshot_2018-05-24_%2B22%3A58%3A25.png" style="display:block;text-align: center;margin-left: auto;margin-right: auto;height:100px">
                                        Derivée
                                    </button>
                                  </div>
                                  <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-primary" onclick="location.href='https://equasnap.herokuapp.com/prendre-photo-primitive';">
                                        <img class="img-thumbnail" src="https://raw.githubusercontent.com/umlp/filr2018pimp-1f/master/resources/assets/Screenshot_2018-05-24_%2B22%3A58%3A40.png" style="display:block;text-align: center;margin-left: auto;margin-right: auto;height:100px">
                                        Primitive
                                    </button>
                                  </div>
                                </div>
                            </div>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
