@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1 class="h3">Edit Follow-Up Details</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="col mt-3">
        <form action="{{ route('update', $person_details->id)}}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label class="h5" for="status">Status</label>
                <select id="status" name="status" class="form-select">
                    <option value="not_contacted" @selected($person_details->followUp->status == 'not_contacted')>
                        Not Contacted
                    </option>
                    
                    <option value="contacted" @selected($person_details->followUp->status == 'contacted')>
                        Contacted
                    </option>
                    
                    <option value="responded" @selected($person_details->followUp->status == 'responded')>
                        Responded
                    </option>
                </select>
            </div>
            <div class="form-floating mt-3">
                <textarea class="form-control" placeholder="Leave a note here" name="note" id="note" style="height: 150px"></textarea>
                <label for="note">Leave a note here</label>
            </div>
            <div class="form-group mt-2">
                <label class="h5" for="followed-up-name">Followed Up By</label>
                <input type="text" class="form-control" id="followed-up-name" name="followed_up_by">
            </div>
            <button type="submit" class="btn btn-outline-success text-white mt-2 float-end">Save</button>  
            <a href="{{ route('index') }}" class="btn btn-outline-danger text-white me-2 mt-2 float-end">Cancel</a>  
        </form>
    </div>
@endsection