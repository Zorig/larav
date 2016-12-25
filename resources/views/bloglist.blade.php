@extends('master')
@section('title', 'Блогууд')
@section('content')
  <div class="column-group">
      <div class="all-100">
          <img src="holder.js/1650x328/auto" alt="">
      </div>
  </div>
  <div class="all-100 gutters">
    @foreach ($blog as $post)
    <div class="all-25">
      <figure class="">
        <img src="" alt="example image">
      </figure>
      <h1 class=""><a href="{{route('blog.detail', $post)}}">{{ $post->title }}</a></h1>
    </div>
    @endforeach
  </div>
@endsection
