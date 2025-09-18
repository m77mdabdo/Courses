@extends('user.app.layout')

@section('content')

<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="breadcrumb_iner text-center">
               <div class="breadcrumb_iner_item">
                  <h2>{{ $blog->title }}</h2>
                  <p>Home <span>-</span> Blog</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- breadcrumb end-->

<section class="blog_area single-post-area section_padding">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 posts-list">
            <div class="single-post">
               <div class="feature-img">
                  <img class="img-fluid" src="{{ asset('storage/'.$blog->image) }}" alt="{{ $blog->title }}">
               </div>
               <div class="blog_details">
                  <h2>{{ $blog->title }}</h2>

                  <ul class="blog-info-link mt-3 mb-4">
                     <li>
                        <i class="far fa-user"></i>
                        {{ $blog->user->name ?? 'Anonymous' }}
                     </li>
                     <li>
                        <i class="far fa-folder"></i>
                        @foreach($blog->categories as $cat)
                           <span class="badge badge-info">{{ $cat->name }}</span>
                        @endforeach
                     </li>
                     <li>
                        <i class="far fa-comments"></i>
                        {{ $blog->comments->count() }} Comments
                     </li>
                  </ul>

                  <p class="excert">
                     {!! nl2br(e($blog->content)) !!}
                  </p>
               </div>
            </div>

            <!-- Comments -->
            <div class="comments-area">
               <h4>{{ $blog->comments->count() }} Comments</h4>
               @foreach($blog->comments as $comment)
                  <div class="comment-list">
                     <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                           <div class="thumb">
                              <img src="{{ asset('img/comment/default.png') }}" alt="">
                           </div>
                           <div class="desc">
                              <p class="comment">
                                 {{ $comment->comment }}
                              </p>
                              <div class="d-flex justify-content-between">
                                 <div class="d-flex align-items-center">
                                    <h5>
                                       <a href="#">{{ $comment->user->name ?? 'Guest' }}</a>
                                    </h5>
                                    <p class="date">{{ $comment->created_at->format('M d, Y H:i') }}</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               @endforeach
            </div>

            <!-- Add Comment -->
            <div class="comment-form">
               <h4>Leave a Reply</h4>
               <form class="form-contact comment_form" action="{{ route('blogs.comments.store', $blog->id) }}" method="POST">
                  @csrf
                  <div class="form-group">
                     <textarea class="form-control w-100" name="comment" cols="30" rows="9"
                        placeholder="Write Comment"></textarea>
                  </div>
                  <button type="submit" class="button btn_1 button-contactForm">Send Message</button>
               </form>
            </div>
         </div>

         <!-- Sidebar -->
         <div class="col-lg-4">
            <div class="blog_right_sidebar">
               <aside class="single_sidebar_widget search_widget">
                  <form action="#">
                     <div class="form-group">
                        <input type="text" class="form-control" placeholder='Search Keyword'>
                     </div>
                     <button class="button rounded-0 primary-bg text-white w-100 btn_1" type="submit">Search</button>
                  </form>
               </aside>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection
