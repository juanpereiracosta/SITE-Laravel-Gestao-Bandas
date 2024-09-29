@extends('layouts.main')

@section('content')
<div style="display: flex; justify-content: center; margin-top: 20px;">
    <div style="width: 600px;">
        <h1 style="text-align: center;">Bandas</h1>
        <table class="table" style="border: none; width: 100%; text-align: center;">
            <thead>
                <tr>
                    <th style="font-size: 1.5rem; background-color: white;">Name</th>
                    <th style="font-size: 1.5rem; background-color: white;">Photo</th>
                    <th style="font-size: 1.5rem; background-color: white;">Records</th>
                    <th style="font-size: 1.5rem; background-color: white;">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bands as $band)
                    <tr>
                        <td>{{ $band->name }}</td>
                        <td>
                            <img src={{ asset($band->photo) }} alt="{{ $band->name }}" style="width: 100px;">
                        </td>
                        <td>{{$band->albums}}</td>
                        <td>
                            <a href="#">Records</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
