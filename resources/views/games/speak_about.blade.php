@extends('templates/games')

@section('style')
    {!! HTML::style('css/dragdrop.css') !!}
@stop

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}" /> <!-- token ajax request -->
    {{ $resource }}
    @if($resource[0]->type === 'img')
        image
    @elseif($resource[0]->type === 'audio')
        audio
    @endif

    <div class="container">

                <!-- success/error messages -->
                <div class="alert alert-danger" role="alert" id="upload_error">
                    <strong>Error</strong>
                    <span id="error_message"></span>
                </div>
                <div class="alert alert-success" role="alert" id="upload_success">
                    <strong>Success</strong>
                    <span id="filename"></span>
                </div>

                <form action=" " method="post" enctype="multipart/form-data" id="js-upload-form">
                    <input type="text" name="time" id="time" value="1.30 minute" />
                    <!-- Drop Zone -->
                    <h4>Drag your audio file below</h4>
                    <div class="upload-drop-zone" id="drop-zone">
                        Just drag and drop your record here
                    </div>
                    <button type="button" class="btn btn-sm btn-primary" id="js-upload-submit">Upload files</button>
                </form>

                <!-- Progress Bar -->
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                        <span class="sr-only">60% Complete</span>
                    </div>
                </div>

    </div> <!-- /container -->
@stop

@section('scripts')
    {!! HTML::script('js/dragdrop.js') !!}
@stop