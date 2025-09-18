@extends('user.app.layout')

@section('content')
    <section class="blog_area section_padding">
        <div class="container">
            <div class="row">
                <!-- Left Side (Posts) -->
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        @foreach ($blogs as $blog)
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="{{ asset('storage/' . $blog->image) }}" alt="">
                                    <a href="#" class="blog_item_date">
                                        <h3>{{ $blog->created_at->format('d') }}</h3>
                                        <p>{{ $blog->created_at->format('M') }}</p>
                                    </a>
                                </div>

                                <div class="blog_details">
                                    <a class="d-inline-block" href="{{ route('blogs.show', $blog->id) }}">
                                        <h2>{{ $blog->title }}</h2>
                                    </a>
                                    <p>{{ Str::limit($blog->content, 150) }}</p>
                                    <ul class="blog-info-link">
                                        <li>
                                            <i class="far fa-user"></i>
                                            @if ($blog->categories->count())
                                                @foreach ($blog->categories as $category)
                                                    {{ $category->name }}{{ !$loop->last ? ',' : '' }}
                                                @endforeach
                                            @else
                                                Uncategorized
                                            @endif
                                        </li>
                                        <li><i class="far fa-comments"></i> {{ $blog->comments->count() }} Comments</li>
                                    </ul>
                                </div>
                            </article>
                        @endforeach


                        <nav class="blog-pagination justify-content-center d-flex">
                            {{ $blogs->links() }}
                        </nav>
                    </div>
                </div>

                <!-- Right Side (Sidebar) -->
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">

                        <!-- Categories -->
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Categories</h4>
                            <ul class="list cat-list">
                                @foreach ($categories as $category)
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>{{ $category->name }}</p>
                                            <p>({{ $category->blogs_count }})</p>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </aside>

                        <!-- Recent Posts -->
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Recent Posts</h3>
                            @foreach ($recentPosts as $post)
                                <div class="media post_item">
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="post" style="width: 80px">
                                    <div class="media-body">
                                        <a href="{{ route('blogs.show', $post->id) }}">
                                            <h3>{{ $post->title }}</h3>
                                        </a>
                                        <p>{{ $post->created_at->format('M d, Y') }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
