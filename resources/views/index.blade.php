@extends('master')
@section('title', 'Нүүр')
@section('content')
  <div class="column-group">
      <div class="all-100">
          <img src="holder.js/1650x728/auto/ink" alt="">
      </div>
  </div>
  <div class="column-group gutters">
    <img src="holder.js/500x300/auto/" alt="" class="all-50 small-100">
    <p class="all-50 small-100 extralarge vertical-space">"Red is not the right word," was the reply. "The plague was scarlet.  The whole face and body turned scarlet in an hour's time. Don't I  know? Didn't I see enough of it? And I am telling you it was scarlet  because&mdash;well, because it was scarlet. There is no other word for it."</p>
    <a href="#" class="ink-button blue">Link</a>
  </div>
  <div class="column-group gutters">
    <div class="all-100">
      <h1 class="fw-300 normal">Блог</h1>
      <span class="note">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. Suspendisse consectetur fringilla luctus. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.
      </span>
    </div>
    <div class="all-100">
      @foreach ($last3blog as $post)
      <div class="all-25">
        <figure class="">
          <img src="" alt="example image">
        </figure>
        <h1 class=""><a href="{{route('blog.detail', $post)}}">{{ $post->title }}</a></h1>
      </div>
      @endforeach
    </div>
  </div>
</div>
<div class="">

</div>
@endsection
