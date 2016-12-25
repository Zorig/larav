@extends('master')
@section('title'){{$blog->title }}@endsection
@section('content')
  <div class="column-group">
      <div class="all-100">
        <figure class="ink-image bottom-space">
          <img src="holder.js/1650x328/auto" alt="">
          <figcaption class="over-bottom">
            {{ucfirst($blog->title)}}
          </figcaption>
        </figure>
      </div>
      <span class="note">
        {{$blog->body}}
      </span>
  </div>
@endsection
