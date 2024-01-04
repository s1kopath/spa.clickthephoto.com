@extends('frontend.home_master')
@section('home_content')

    <div class="page-header">
        <div class="container">
            <h1 class="title">{{$training->pages_title}}</h1>
        </div>
        <div class="breadcrumb-box">
            <div class="container">
                <ul class="breadcrumb">
                    <li>
                        <a href="{{route('/')}}">Home</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">What We Do?</a>
                    </li>
                    <li class="active">{{$training->pages_title}}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- page-header -->
    <section class="page-section">
        <div class="container">
            <div class="row">
                <div class="row col-md-9">
                    <div class="col-sm-6 col-md-12">
                        <img src="{{asset('storage/app/public/pages_image_folder/'.$training->pages_image)}}"
                             width="800" height="570" alt="{{$training->pages_title}}" title=""/>
                    </div>
                    <div class="col-sm-6 col-md-12">
                        <h4>{{$training->pages_title}}</h4>
                        <p>
                            <?= $training->pages_content ?>
                        </p>
                    </div>
                </div>
                <div class="sidebar col-md-3">
                    @include('frontend.partials.training_right_sidebar')
                </div>
            </div>
        </div>
    </section>

@endsection
