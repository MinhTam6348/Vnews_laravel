@extends('main_layouts.header')

@section('title', $post->title)


@section('content')

	<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="{{ asset($post->image ? 'storage/' . $post->image->path : 'storage/placeholders/thumbnail_placeholder.svg' . '')  }}">
      <div class="container pt-17 pb-13 pt-md-19 pb-md-17 text-center">
        <div class="row">
          <div class="col-md-10 col-xl-8 mx-auto">
            <div class="post-header">
              <div class="post-category text-line text-white">
                <a href="#" class="text-reset" rel="category">{{ $post->category->name }}</a>
              </div>
              <!-- /.post-category -->
              <h1 class="display-1 mb-4 text-white">{{ $post->title }}</h1>
              <ul class="post-meta text-white">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{ $post->created_at->diffForHumans() }}</span></li>
                <li class="post-author"><i class="uil uil-user"></i><a href="#" class="text-reset"><span>{{ $post->author->name }}</span></a></li>
                <li class="post-comments"><i class="uil uil-comment"></i><a href="#" class="text-reset">{{ count($post->comments) }}<span> Comments</span></a></li>
                <li class="post-likes"><i class="uil uil-heart-alt"></i><a href="#" class="text-reset">3<span> Likes</span></a></li>
              </ul>
              <!-- /.post-meta -->
            </div>
            <!-- /.post-header -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>

	<section class="wrapper bg-light">
      <div class="container py-14 py-md-16">
        <div class="row gx-lg-8 gx-xl-12">
          <div class="col-lg-8">
            <div class="blog single">
              <div class="card">
                <figure class="card-img-top"><img src="{{ asset($post->image ? 'storage/' . $post->image->path : 'storage/placeholders/thumbnail_placeholder.svg' . '')  }}" alt="" /></figure>
                <div class="card-body">
                  <div class="classic-view">
                    <article class="post">
                      <div class="post-content mb-5">
                        <h2 class="h1 mb-4">{{ $post->title }}</h2>
                        <p>{!! $post->body !!}</p>
                        </br>
                        
                      </div>
                      <!-- /.post-content -->
                      <div class="post-footer d-md-flex flex-md-row justify-content-md-between align-items-center mt-8">
                        <div>
                          <ul class="list-unstyled tag-list mb-0">
                          @foreach($post->tags as $tag)
                            <li><a href="{{ route('tags.show', $tag) }}" class="btn btn-soft-ash btn-sm rounded-pill mb-0">{{ $tag->name }}</a></li>    
                            @endforeach                       
                          </ul>
                        </div>
                        <div class="mb-0 mb-md-2">
                          <div class="dropdown share-dropdown btn-group">
                            <button class="btn btn-sm btn-red rounded-pill btn-icon btn-icon-start dropdown-toggle mb-0 me-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="uil uil-share-alt"></i> Share </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#"><i class="uil uil-twitter"></i>Twitter</a>
                              <a class="dropdown-item" href="#"><i class="uil uil-facebook-f"></i>Facebook</a>
                              <a class="dropdown-item" href="#"><i class="uil uil-linkedin"></i>Linkedin</a>
                            </div>
                            <!--/.dropdown-menu -->
                          </div>
                          <!--/.share-dropdown -->
                        </div>
                      </div>
                      <!-- /.post-footer -->
                    </article>
                    <!-- /.post -->
                  </div>
                  <!-- /.classic-view -->
                  <hr />
                  <div class="author-info d-md-flex align-items-center mb-3">
                    <div class="d-flex align-items-center">
                      <figure class="user-avatar"><img class="rounded-circle" alt="" src="{{ asset('blog_template/assets/img/avatars/u5.jpg') }}" /></figure>
                      <div>
                        <h6><a href="#" class="link-dark">{{ $post->author->name }}</a></h6>
                        <span class="post-meta fs-15">Sales Manager</span>
                      </div>
                    </div>
                    
                  </div>
                  <!-- /.author-info -->
                  <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac. Maecenas faucibus mollis interdum.</p>
                  <nav class="nav social">
                    <a href="#"><i class="uil uil-twitter"></i></a>
                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                    <a href="#"><i class="uil uil-dribbble"></i></a>
                    <a href="#"><i class="uil uil-instagram"></i></a>
                    <a href="#"><i class="uil uil-youtube"></i></a>
                  </nav>
                  <!-- /.social -->
                  <hr />
                  
                  <div id="comments">
                    <h3 class="mb-6">{{ count($post->comments) }} Comments</h3>
                    <ol id="singlecomments" class="commentlist">
						          @foreach($post->comments as $comment)
                      <li class="comment" id="comment_{{ $comment->id }}">
                        <div class="comment-header d-md-flex align-items-center">
                          <div class="d-flex align-items-center">
                            <figure class="user-avatar"><img class="rounded-circle" alt="" src="{{ $comment->user->image ? asset('storage/' . $comment->user->image->path. '') : 'https://images.assetsdelivery.com/compings_v2/salamatik/salamatik1801/salamatik180100019.jpg'  }}" /></figure>
                            <div>
                              <h6 class="comment-author"><a href="#" class="link-dark">{{ $comment->user->name }}</a></h6>
                              <ul class="post-meta">
                                <li><i class="uil uil-calendar-alt"></i>{{ $comment->created_at->diffForHumans() }}</li>
                              </ul>
                              <!-- /.post-meta -->
                            </div>
                            <!-- /div -->
                          </div>
                          <!-- /div -->
                          <div class="mt-3 mt-md-0 ms-auto">
                            <a href="#" class="btn btn-soft-ash btn-sm rounded-pill btn-icon btn-icon-start mb-0"><i class="uil uil-comments"></i> Reply</a>
                          </div>
                          <!-- /div -->
                        </div>
                        <!-- /.comment-header -->
                        <p>{{ $comment->the_comment }}</p>
                      </li>
					            @endforeach
                    </ol>
                  </div>
                  <!-- /#comments -->
                  <hr />
                  <h3 class="mb-3">Would you like to share your thoughts?</h3>
                  

				  @auth
                  <form class="comment-form" action="{{ route('posts.add_comment', $post) }}" method="POST">

                  @csrf
                    <div class="form-floating mb-4">
                      <textarea name="the_comment" id="the_comment" class="form-control" placeholder="Say something about us" style="height: 150px"></textarea>
                      <label>Comment </label>
                    </div>
                    <button type="submit" class="btn btn-primary rounded-pill mb-0">Submit</button>
                  </form>

				  @endauth

				@guest
					<p class="lead"><a href="{{ route('login') }}">Login </a> OR <a href="{{ route('register') }}">Register</a> to write comments</p>
				@endguest
                  <!-- /.comment-form -->
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.blog -->
          </div>
          <!-- /column -->
          <aside class="col-lg-4 sidebar mt-8 mt-lg-6">
            
            <div class="widget">
              <h4 class="widget-title mb-3">Popular Posts</h4>
              <ul class="image-list">
                @foreach($recent_posts as $recent_post)
                <li>
                  <figure class="rounded"><a href="{{ route('posts.show', $recent_post) }}"><img src="{{ asset($recent_post->image ? 'storage/' . $recent_post->image->path : 'storage/placeholders/thumbnail_placeholder.svg' . '')  }}" alt="" /></a></figure>
                  <div class="post-content">
                    <h6 class="mb-2"> <a class="link-dark" href="{{ route('posts.show', $recent_post) }}">{{ \Str::limit( $recent_post->title, 20) }}</a> </h6>
                    <ul class="post-meta">
                      <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{ $recent_post->created_at->diffForHumans() }}</span></li>
                    </ul>
                    <!-- /.post-meta -->
                  </div>
                </li>
                @endforeach
              </ul>
              <!-- /.image-list -->
            </div>
            <!-- /.widget -->
            <div class="widget">
              <h4 class="widget-title mb-3">Categories</h4>
              <ul class="unordered-list bullet-primary text-reset">
                @forelse($categories as $category)
                <li><a href="{{ route('categories.show', $category) }}">{{ $category->name }} ({{ $category->posts_count }})</a></li>
                @empty
                    <p class='lead'>There are no categories to show.</p>
                @endforelse
              </ul>
            </div>
            <!-- /.widget -->
            <div class="widget">
              <h4 class="widget-title mb-3">Tags</h4>
              <ul class="list-unstyled tag-list">
                @foreach($tags as $tag)
                <li><a href="{{ route('tags.show', $tag) }}" class="btn btn-soft-ash btn-sm rounded-pill">{{ $tag->name }}</a></li>
                @endforeach
              </ul>
            </div>
            <!-- /.widget -->
            
          </aside>
          <!-- /column .sidebar -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
			
@endsection

