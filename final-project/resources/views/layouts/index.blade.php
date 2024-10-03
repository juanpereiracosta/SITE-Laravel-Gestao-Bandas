@extends('layouts.main')

@section('content')
<div style="display: flex; justify-content: center; margin-top: 20px;">
    <div style="width: 600px;">
        <h1 style="text-align: center;">Lista de Bandas</h1>
        <table class="table" style="border: none; width: 100%; text-align: center;">
            <thead>
                <tr>
                    <th style="font-size: 1.5rem; background-color: white;">Nome da Banda</th>
                    <th style="font-size: 1.5rem; background-color: white;">Foto</th> <!-- Nova coluna para a foto -->
                    <th style="font-size: 1.5rem; background-color: white;">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bands as $band)
                    <tr>
                        <td>{{ $band->name }}</td>
                        <td>
                            @if($band->photo)
                                <img src="{{ asset('storage/' . $band->photo) }}" style="width: 120px" alt="{{ $band->name }}">
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('bands.albums', $band->id) }}">Ver álbuns</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
