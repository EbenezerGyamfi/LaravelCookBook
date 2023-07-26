@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <ul class="list-group">
                        @foreach ($posts as $post)
                            <li class="list-group-item mt-3 flex justify-content-between">
                                <a href="{{ route('post.edt', $post->id) }}"> {{ $post->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
