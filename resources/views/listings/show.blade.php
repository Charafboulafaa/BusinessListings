@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$listing->name}}
                <span class="float-right"><a class="btn btn-dark btn-sm" href="/listings">Go back</a></span>
                </div>

                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">Address: {{$listing->address}}</li>
                        <li class="list-group-item">Website: <a href="{{$listing->website}}" target="_blank">{{$listing->website}}</a></li>
                        <li class="list-group-item">Email: <a href="mailto:{{$listing->email}}">{{$listing->email}}</a></li>
                        <li class="list-group-item">Phone: <a href="tel:{{$listing->phone}}">{{$listing->phone}}</a></li>
                    </ul>
                    <div class="card-body">{{$listing->bio}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
