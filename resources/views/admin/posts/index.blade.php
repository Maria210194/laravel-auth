@extends('layouts.dashboard')
@section('content')
    <div>
        <a class="btn btn-primary" href="{{ route('admin.posts.create') }}">New post</a>
    </div>
    <div>
        <table>
            <tr>
                <th>Title</th>
                <th>Slug Title</th>
            </tr>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->slug }}</td>
                    <td>
                        <a href="{{ route('admin.posts.show', $post->id) }}">
                            <i class="fas fa-search fa-2xl"></i>
                        </a>
                        <a href="{{ route('admin.posts.edit', $post->id) }}">
                            <i class="fas fa-edit fa-2xl"></i>
                        </a>
                        <form action="{{ route('admin.posts.destroy', $post->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type='submit' onclick="return confirm('Sicur* di voler eliminare il post?')"
                                type="submit" value="" class="btn btn-danger">
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
