@extends('site.layout')

@section('title', $post['title'])

@section('content')

<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /bradcam_area  -->

<div class="container md-12">
    {!! $post['body'] !!}
    
</div>

@endsection