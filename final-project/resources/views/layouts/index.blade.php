@extends('layouts.main')

@section('content')
    <div style="display: flex; justify-content: center; margin-top: 20px;">
        <div style="width: 600px;">
            <table class="table" style="border: none; width: 100%; text-align: center;">
                <tbody>
                    @foreach ($bands as $band)
                        <tr>
                            <td>{{ $band->name }}</td>
                            <td>
                                @if ($band->photo)
                                    <img src="{{ asset('storage/' . $band->photo) }}" style="width: 120px"
                                        alt="{{ $band->name }}">
                                @endif
                            </td>
                            <td>{{ $band->albums_count }} album</td>
                            <td>
                                <a href="{{ route('bands.albums', $band->id) }}" style="text-decoration: none; color:black">See album</a>
                            </td>
                            <td>
                                <form action="{{ route('bands.destroy', $band->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
