@extends('layouts.main')

@section('content')
<div style="display: flex; justify-content: center; margin-top: 20px;">
    <div style="width: 600px;">
        <h2 style="text-align: center;">Álbuns de {{ $band->name }}</h2>
        <table class="table" style="border: none; width: 100%; text-align: center;">
            <thead>
                {{-- <tr>
                    <th style="font-size: 1.5rem; background-color: white;">Album Name</th>
                    <th style="font-size: 1.5rem; background-color: white;">Actions</th>
                </tr> --}}
            </thead>
            <tbody>
                @foreach($albums as $album)
                    <tr>
                        <td>{{ $album->album_name }}</td>
                        <td>
                            @if($album->album_photo)
                                <img src="{{ asset('storage/' . $album->album_photo) }}" style="width: 120px" alt="{{ $album->album_name }}">
                            @endif
                        </td>
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
