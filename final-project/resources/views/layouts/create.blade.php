@extends('layouts.main')

@section('content')
<div style="display: flex; justify-content: center; margin-top: 50px; margin-bottom: 50px;">
    <div style="width: 800px; padding: 40px; border: 1px solid #ccc; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
        <h1 style="text-align: center; font-size: 3rem; font-weight: bold; margin-bottom: 40px;">Add Band</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('bands.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Band name:</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div  class="form-group">
                <label for="photo">Band photo:</label>
                <input type="file" name="photo" id="photo" class="form-control" accept="image/*">
            </div>
            <div style="padding-top: 1rem" class="form-group">
                <label for="album_name">Album name:</label>
                <input type="text" name="album_name" id="album_name" class="form-control" placeholder="Digite o nome do álbum" required>
            </div>
            <div style="padding-top: 1rem" class="form-group">
                <label for="album_photo">Album photo:</label>
                <input type="file" name="album_photo" id="album_photo" class="form-control" accept="image/*">
            </div>
            <button style="margin-top: 1rem" type="submit" class="btn btn-primary">Add band</button>
        </form>
    </div>
</div>
@endsection
