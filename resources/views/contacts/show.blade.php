@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Contact details') }}

                <div class="float-end">
                        <a href="{{ route('home') }}" class="btn btn-secondary" role="button">Back</a>
                    </div>
                </div>
                
                <div class="card-body">
                    <p class="card-text fs-4">Name : {{ $contact->name }}</p>
                    <p class="card-text">Email : {{ $contact->email }}</p>
                    <p class="card-text">Phone : {{ $contact->phone }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection