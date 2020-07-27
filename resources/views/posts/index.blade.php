@extends('layouts.app')

@section('content')
<div class="container">
    <p>Hi</p>

    <div class="row">

    @foreach($posts as $post)

      <div class="col-6 col-md-4 p-2">

        <div class="card">

        <img src="/storage/{{ $post->image }}" class="w-100">

        <div class="card-body">
          <a href="/profile/{{ $post->user->id }}">
          <span style="font-weight:800;">{{ $post->user->username }}</span>
          </a>
          {{ $posts->links() }} -- {{ $post->caption }}
        </div>

        </div>

      </div>

    @endforeach
    </div>


</div>
@endsection
