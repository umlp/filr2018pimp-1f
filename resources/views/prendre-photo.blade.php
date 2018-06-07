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
                    <!-- CSS -->
                    <style>
                    #my_camera{
                     width: 320px;
                     height: 240px;
                     border: 1px solid black;
                    }
                    </style>

                    <!-- -->
                     <div id="my_camera"></div>
                     <input type=button value="Configure" onClick="configure()">
                     <input type=button value="Take Snapshot" onClick="take_snapshot()">
                     <input type=button value="Save Snapshot" onClick="saveSnap()">

                     <div id="results" ></div>

                     <!-- Script -->
                     <script type="text/javascript" src="webcamjs/webcam.min.js"></script>

                     <!-- Code to handle taking the snapshot and displaying it locally -->
                     <script language="JavaScript">

                     // Configure a few settings and attach camera
                     function configure(){
                      Webcam.set({
                       width: 320,
                       height: 240,
                       image_format: 'jpeg',
                       jpeg_quality: 90
                      });
                      Webcam.attach( '#my_camera' );
                     }
                     // A button for taking snaps


                     // preload shutter audio clip
                     var shutter = new Audio();
                     shutter.autoplay = false;
                     shutter.src = navigator.userAgent.match(/Firefox/) ? 'shutter.ogg' : 'shutter.mp3';

                     function take_snapshot() {
                      // play sound effect
                      shutter.play();

                      // take snapshot and get image data
                      Webcam.snap( function(data_uri) {
                      // display results in page
                      document.getElementById('results').innerHTML = 
                       '<img id="imageprev" src="'+data_uri+'"/>';
                      } );

                      Webcam.reset();
                     }

                    function saveSnap(){
                     // Get base64 value from <img id='imageprev'> source
                     var base64image = document.getElementById("imageprev").src;

                     Webcam.upload( base64image, 'upload.php', function(code, text) {
                      console.log('Save successfully');
                      //console.log(text);
                     });

                    }
                    </script>
                </div>
            </div>
        </div>
    </div>
@endsection
