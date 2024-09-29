@extends('layouts.main')

@section('content')
<div style="display: flex; justify-content: center; margin-top: 50px; margin-bottom: 50px;">
    <div style="width: 800px; padding: 40px; border: 1px solid #ccc; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
        <h1 style="text-align: center; font-size: 3rem; font-weight: bold; margin-bottom: 40px;">Add Band</h1>
        <form action="{{ route('bands.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group" style="margin-bottom: 30px;">
                <label for="name" style="font-weight: bold; font-size: 1.5rem;">Band Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter band name" required style="width: 100%; font-size: 1.2rem;">
            </div>
            <div class="form-group" style="margin-bottom: 30px;">
                <label for="photo" style="font-weight: bold; font-size: 1.5rem;">Photo</label>
                <input type="file" name="photo" class="form-control" required style="width: 100%; font-size: 1.2rem;">
            </div>
            <button type="submit" class="btn" style="margin-top: 20px; background-color: black; color: white; font-size: 1rem; padding: 10px 20px;">Add Band</button>
        </form>
    </div>
</div>
@endsection








