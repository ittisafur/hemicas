@extends("layouts.frontend.index")





@section('meta')

    @include ('layouts.frontend.meta')

@endsection



@section('header')

    @include ('layouts.frontend.header')

@endsection



@section('onpagecss')

    <link href="{{ asset('assets/css/success.css') }}" rel="stylesheet">



@endsection



@section('content')



    <main class="xs-main">

        <!-- blog single post -->

        <div class=" xs-blog-single">

            <div class="container">

                <div class="row">

                    <div class=" col-lg-12 col-md-12 ">

                        <!-- format standard -->

                        <article class="post format-standard hentry xs-blog-post-details">

                            @if ($success->video)

                                <div class="post-media post-image">



                                    <iframe width="100%" height="544" src="{{ $success->video }}" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>



                                </div>



                            @else

                                <div class="post-media post-image">

                                    <img src="{{ url(Path::success() . $success->image) }}" class="img-responsive" alt="">

                                </div>

                            @endif

                            <!-- .post-media END -->



                            <div class="post-body xs-border xs-padding-40">

                                <div class="entry-header">

                                    <div class="post-meta row">

                                        <div class="col-md-2 xs-padding-0">



                                            <span
                                                class="post-meta-date"><b>{{ date('d', strtotime($success->storyDate)) }}</b>

                                                {{ date('F', strtotime($success->storyDate)) }}</span>

                                        </div>

                                        {{-- <div

                                            class="col-md-10 d-flex align-items-end xs-post-meta-list">

                                            <span class="post-cat">

                                                <i class="fa fa-folder-open"></i><a href="#">Nutrition Program

                                                </a>

                                            </span>

                                        </div> --}}

                                    </div>

                                    <!-- .row end -->

                                    <h2 class="entry-title xs-post-entry-title">

                                        <a href="#">{{ $success->title }}</a>

                                    </h2>

                                </div>

                                <!-- header end -->



                                <div class="entry-content">

                                    {!! $success->description !!}



                                </div>

                                <!-- .xs-entry-content END -->





                            </div>

                            <!-- post-body end -->

                        </article>

                        <!-- .post  END -->

                        <!-- format standard closed -->





                    </div>



                </div>

                <!-- .row end -->

            </div>

            <!-- .container end -->

        </div>

        <!-- End blog single post -->

        <!-- journal section -->

        <section class="xs-content-section-padding bg-gray">

            <div class="container">

                <div class="xs-heading row xs-mb-60">

                    <div class="col-md-12 col-xl-12">

                        <h2 class="xs-title">From the Stories</h2>





                    </div>

                    <!-- .xs-heading-title END -->



                </div>

                <div class="row xs-mb-50 paginationcont">

                    @foreach ($successes as $success)
                    @if($success->status == 'active')
                            <div class="col-lg-4 col-md-6 single-item">
                                <a href={{ url("success/$success->id/details") }}>
                                    <div class="xs-box-shadow xs-single-journal xs-mb-30">
                                        <div class="entry-thumbnail ">
                                            <img src="{{ url(Path::success() . $success->image) }}" alt="">
                                        </div>
                                        <!-- .xs-item-header END -->
                                        <div class="entry-header">
                                            <div class="entry-meta">
                                                <span class="date">
                                                    <a href={{ url("success/$success->id/details") }} rel="bookmark"
                                                        class="entry-date">
                                                        {{ date('jS F Y', strtotime($success->storyDate)) }}
                                                    
                                                    </a>
                                                </span>
                                            </div>
                                            <h4 class="entry-title">
                                                <a
                                                    href={{ url("success/$success->id/details") }}>{{ $success->title }}</a>
                                            </h4>
                                        </div>
                                        <!-- .xs-entry-header END -->
                                        <span class="xs-separetor"></span>
                                        <!-- .post-meta END -->
                                    </div>
                                </a>
                                <!-- .xs-from-journal END -->
                            </div>
                        @endif
                @endforeach

                    

                </div>

            </div>

        </section>

    </main>







    @include ('layouts.frontend.footer')





@endsection



@section('onpagejs')





    <script src="{{ asset('assets/js/success.js') }}" defer></script>





@endsection
