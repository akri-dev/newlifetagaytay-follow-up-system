@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1 class="h3">Add Person</h1>
    <div class="col mt-3">
        <form action="{{ route('store')}}" method="POST">
            <div class="form-group">
                <label class="h5" for="full-name">Full Name</label>
                <input type="text" class="form-control" id="full-name" name="full_name">
            </div>
            <div class="form-group mt-2">
                <label class="h5" for="contact">Contact Details</label>
                <input type="text" class="form-control" id="contact" name="contact">
            </div>
            <div class="form-group mt-2">
                <label class="h5" for="source">Ministry Source &#40; i.e. Sunday Service, The Gathering &#41;</label>
                <input type="text" class="form-control" id="source" name="source">
            </div>
            <button type="button" type="submit" class="btn btn-outline-success text-white mt-2 float-end">Save</button>  
            <a href="{{ route('index') }}" class="btn btn-outline-danger text-white me-2 mt-2 float-end">Cancel</a>  
        </form>
    </div>
@endsection