@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="row">
        <h1 class="h3 text-center d-inline-block">{{ config('app.name') }}</h1>
    </div>
    <div class="row mt-3">
        <table class="table table-dark text-white">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Contact Details</th>
                    <th scope="col">Ministry Source</th>
                    <th scope="col">Status</th>
                    <th scope="col">Last Note</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>                    
                @if($not_contacted_people->isNotEmpty())
                    @foreach ($not_contacted_people as $person)
                    <tr>
                        <th scope="row">{{ $person->followUp->id }}</th>
                        <td>{{ $person->full_name }}</td>
                        <td>{{ $person->contact }}</td>
                        <td>{{ $person->source }}</td>
                        <td>{{ $person->followUp->status->value == 'not_contacted' ? 'Not Contacted' : '' }}</td>
                        <td>{{ $person->followUp->note }}</td>
                        <td><a href="{{ route('edit', $person->id) }}" class="btn btn-secondary btn-sm" title="Edit"><i class="fa-solid fa-pen"></i></a></td>
                    </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
    <div class="row justify-content-center mt-3">
        <div class="col-9">
            <h1 class="h3">Add Person</h1>
            <div class="col mt-3">
                <form action="{{ route('store')}}" method="POST">
                    @csrf
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
                    <button type="submit" class="btn btn-outline-success text-white mt-2 px-5 float-end">Save</button>
                    {{-- <a href="{{ route('index') }}" class="btn btn-outline-danger text-white me-2 mt-2 float-end">Cancel</a> --}}
                </form>
            </div>
        </div>
    </div>
@endsection