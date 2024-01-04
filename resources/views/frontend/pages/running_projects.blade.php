@extends('frontend.home_master')
@section('home_content')

    <div class="page-header">
        <div class="container">
            <h1 class="title">Running Projects</h1>
        </div>
        <div class="breadcrumb-box">
            <div class="container">
                <ul class="breadcrumb">
                    <li>
                        <a href="{{route('/')}}">Home</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">Projects</a>
                    </li>
                    <li class="active">Running Projects</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- page-header -->

    <section id="about-us" class="page-section">
        <div class="container">
            <div class="row">
                @if(isset($runningProjects) && !empty($runningProjects))

                    @foreach($runningProjects as $runningProject)
                        <div class="col-sm-4 col-md-4 bottom-pad-30" data-animation="fadeInUp">
                            <img width="500" height="319" class="bottom-pad-20" alt=""
                                 src="{{asset('storage/app/public/projects_image_folder/'.$runningProject->project_image)}}"
                                 style="height: 319px;"/>
                            <h4 class="text-left bottom-margin-10">
                                {{\Illuminate\Support\Str::limit($runningProject->project_title, 35, '...')}}
                            </h4>
                            <p class="text-left">
                                <?= \Illuminate\Support\Str::limit($runningProject->project_content, 150, '...'); ?>
                            </p>
                            <a href="{{route('project-details',$runningProject->id)}}" class="btn btn-default">Read
                                more</a>
                        </div>
                    @endforeach
                    <div class="col-sm-12" style="opacity: 1;">
                        {{ $runningProjects->links() }}
                    </div>

                @else
                    <div class="text-center">
                        Ooops... No content available...!!!
                    </div>
                @endif

            </div>
        </div>
    </section>


@endsection
