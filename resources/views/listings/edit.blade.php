@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card">
                <div class="card-header">Edit Listing</div>

                <div class="card-body">
                    <form action="{{ action('ListingsController@update', $listing->id) }}" method="POST">
                        <input name="_method" type="hidden" value="PUT">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <input class="form-control" type="text" name="name" placeholder="Company Name" value="{{$listing->name}}">
                        </div>
                        
                        <div class="form-group">
                            <input class="form-control" type="text" name="address" placeholder="Address" value="{{$listing->address}}">
                        </div>
                        
                        <div class="form-group">
                            <input class="form-control" type="url" name="website" placeholder="Website" value="{{$listing->website}}">
                        </div>

                        <div class="form-group">
                            <input class="form-control" type="email" name="email" placeholder="Email" value="{{$listing->email}}">
                        </div>

                        <div class="form-group">
                            <input class="form-control" type="tel" name="phone" placeholder="Phone Number" value="{{$listing->phone}}">
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" name="bio" id="" cols="30" rows="10" placeholder="Bio">{{$listing->bio}}</textarea>
                        </div>

                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection