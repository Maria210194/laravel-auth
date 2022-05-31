@extends('layouts.dashboard')
@section('content')
    <form action="{{ route('admin.posts.store') }}" method="post">
        @csrf
        <div>
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}"
                placeholder=" Scrivi un titolo">
            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="content">Contenuto</label>
            <textarea name="content" id="content" rows="2">{{ old('content') }}</textarea>
            @error('content')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <input class="btn btn-primary" type="submit">
    </form>
@endsection
