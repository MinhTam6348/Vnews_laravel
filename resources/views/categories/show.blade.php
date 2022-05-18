@extends('main_layouts.header')

@section('title', $category->name)

@section('content')

<section class="wrapper bg-light">
      <div class="container py-14 py-md-16">
        <div class="row gx-lg-8 gx-xl-12">
          <div class="col-lg-8">
            <div class="blog classic-view">

                @forelse($posts as $post)

                <article class="post">
                    <div class="card">
                    <figure class="card-img-top overlay overlay-1 hover-scale"><a href="{{ route('posts.show', $post) }}"><img src="{{ asset('storage/' . $post->image->path. '')  }}" alt="" /></a>
                        <figcaption>
                        <h5 class="from-top mb-0">Read More</h5>
                        </figcaption>
                    </figure>
                    <div class="card-body">
                        <div class="post-header">
                        <div class="post-category text-line">
                            <a href="{{ route('categories.show', $post->category) }}" class="hover" rel="category">{{ $post->category->name }}</a>
                        </div>
                        <!-- /.post-category -->
                        <h2 class="post-title mt-1 mb-0"><a class="link-dark" href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h2>
                        </div>
                        <!-- /.post-header -->
                        <div class="post-content">
                        <p>{{ $post->excerpt }}</p>
                        </div>
                        <!-- /.post-content -->
                    </div>
                    <!--/.card-body -->
                    <div class="card-footer">
                        <ul class="post-meta d-flex mb-0">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{ $post->created_at->diffForHumans() }}</span></li>
                        <li class="post-author"><a href="#"><i class="uil uil-user"></i><span>{{ $post->author->name }}</span></a></li>
                        <li class="post-comments"><a href="{{ route('posts.show', $post) }}#post-comments"><i class="uil uil-comment"></i>3<span> {{ $post->comments_count }}</span></a></li>
                        <li class="post-likes ms-auto"><a href="#"><i class="uil uil-heart-alt"></i>3</a></li>
                        </ul>
                        <!-- /.post-meta -->
                    </div>
                    <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </article>
                <!-- /.post -->   

                @empty
                    <p class='lead'>There are no posts to show.</p>

                @endforelse

                {{ $posts->links() }}

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
