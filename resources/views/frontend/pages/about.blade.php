@extends('layouts.frontend')

@section('title', trans('labels.frontend.titles.about'))

@section('body_class', 'page-about')

@section('highlight')
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Hello, world!</h1>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
        </div>
    </div>
@endsection

@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-home"></i> @lang('labels.frontend.titles.about')
        </div>

        <div class="card-block">
            <p>
                Nulla quis lorem ut libero malesuada feugiat. Sed porttitor lectus nibh. Vivamus suscipit tortor
                eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Vivamus suscipit tortor eget
                felis porttitor volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                posuere
                cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur non nulla sit amet
                nisl
                tempus convallis quis ac lectus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at
                sem.
                Quisque velit nisi, pretium ut lacinia in, elementum id enim.
            </p>
        </div>
    </div>

    <panel title="Vue Panel Component" v-cloak>
        <p>Hey ! I'm a Vue Panel component !</p>
    </panel>

    <div class="card mb-3">
        <div class="card-header">
            This panel show original 4K images samples optimized by imagecache intervention laravel package
        </div>

        <div class="card-block">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ image_template_url('large', 'wallpapers-uhd/03908_halfdomejoy_3840x2160.jpg') }}" alt="halfdomejoy" width="480" height="360" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="{{ image_template_url('large', 'wallpapers-uhd/03909_insidebrycecanyon_3840x2160.jpg') }}" alt="insidebrycecanyon" width="480" height="360" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="{{ image_template_url('large', 'wallpapers-uhd/03987_forestsofendor_3840x2160.jpg') }}" alt="forestsofendor" width="480" height="360" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
@endsection
