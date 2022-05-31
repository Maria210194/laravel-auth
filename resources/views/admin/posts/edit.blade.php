@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h1>Modifica post{{$post->id}}</h1>
                    <a href="{{route('admin.posts.index')}}" class="btn btn-primary">
                    </a>
                </div>
                <div>
                    @if ($error->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
                <form action="{{route('admin.posts.update', ['post'=>$post->id])}}" method="post" >
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="title">Titolo</label>
                        <input type="text" name="title" id="title" placeholder="Scrivi un titolo"
                            value="{{ old('title', $post->title) }}">
                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Contenuto</label>
                        <textarea  name="content" id="content" rows="3">{{ old('content', $post->content) }}</textarea>
                        @error('content')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <input class="btn btn-primary" type="submit">
                </form>

            </div>
        </div>
    </div>
@endsection
