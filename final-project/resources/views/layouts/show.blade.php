@extends('layouts.main')

@section('content')
<div style="display: flex; justify-content: center; margin-top: 20px;">
    <div style="width: 600px;">
        <h1 style="text-align: center;">Álbuns de {{ $band->name }}</h1>
        <table class="table" style="border: none; width: 100%; text-align: center;">
            <thead>
                <tr>
                    <th style="font-size: 1.5rem; background-color: white;">Album Name</th>
                    <th style="font-size: 1.5rem; background-color: white;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($albums as $album)
                    <tr>
                        <td>{{ $album->album_name }}</td>
                        <td>
                            <a href="#">Ver detalhes</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
