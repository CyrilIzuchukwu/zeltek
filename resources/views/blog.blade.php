    @extends('layout.app')
    @section('content')

    <div class="sc-breadcrumb-style sc-pt-80 sc-pb-80">
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sc-slider-content p-z-idex">
                        <div class="sc-slider-subtitle">Home - Blog</div>
                        <h1 class="slider-title white-color sc-mb-25 sc-sm-mb-15">Blog</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="sc-blog-section-area sc-pt-100 sc-md-pt-80 sc-pb-60 sc-md-pb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                    <div class="sc-heading-area sc-mb-35 text-center">
                        <span class="sub-title"><i class="icon-line me-2"></i>Latest News</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="sc-blog-content-area">
                        <div class="row">
                            @if($all_blogs->isEmpty())
                            <div class="col-12 text-center">
                                <p>No record of blogs available.</p>
                            </div>
                            @else
                            @foreach($all_blogs as $single_blog)
                            <div class="col-md-6">
                                <div class="sc-blog-style2 blog-area sc-mb-70">
                                    <div class="blog-img">
                                        <a href="{{ route('blog_details', $single_blog->id) }}"><img src="{{ asset('blog_images/' . $single_blog->image) }}" alt="Blog"></a>
                                    </div>
                                    <div class="sc-blog-date-box">
                                        <div class="sc-date-box px-2">
                                            <h4 class="title">{{ $single_blog->created_at->format('d') }}</h4>
                                            <span class="sub-title">{{ $single_blog->created_at->format('M Y') }}</span>
                                        </div>
                                        <div class="sc-blog-social text-center">
                                            <ul class="list-gap">
                                                <li><i class="icon-david2"></i>{{ $single_blog->author }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="sc-blog-text">
                                        <h3>
                                            <a class="title" href="{{ route('blog_details', $single_blog->id) }}">{{ $single_blog->title }}</a>
                                        </h3>
                                        <p class="des">
                                            {{ \Illuminate\Support\Str::words(strip_tags($single_blog->content), 20, '...') }}
                                        </p>
                                        <div class="sc-blog-btn">
                                            <a class="sc-transparent-btn" href="{{ route('blog_details', $single_blog->id) }}">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>

                        @if($all_blogs->isNotEmpty())
                        <div class="row">
                            <div class="d-flex justify-content-between">
                                <div>
                                    Showing {{ $all_blogs->firstItem() }} to {{ $all_blogs->lastItem() }} of {{ $all_blogs->total() }} results
                                </div>
                                <div>
                                    {{ $all_blogs->links('pagination::bootstrap-4') }}
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>


    @endsection
