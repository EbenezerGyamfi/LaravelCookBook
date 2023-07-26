@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <ul class="list-group">
                        <li class="list-group-item ">
                            <h4> {{ $post->title }}</h4>
                            <p>{{ $post->content }}</p>
                            <div class="mt-3">
                                <a href="{{route('post.create',$post->id)}}" class="btn btn-warning btn-sm">edit</a>
                                <a href="" class="btn btn-danger btn-sm">Delete</a>
                            </div>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
