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
                <div class="card-header">Create Listing</div>

                <div class="card-body">
                    <form action="{{ action('ListingsController@store') }}" method="POST">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <input class="form-control" type="text" name="name" placeholder="Company Name">
                        </div>
                        
                        <div class="form-group">
                            <input class="form-control" type="text" name="address" placeholder="Address">
                        </div>
                        
                        <div class="form-group">
                            <input class="form-control" type="url" name="website" placeholder="Website">
                        </div>

                        <div class="form-group">
                            <input class="form-control" type="email" name="email" placeholder="Email">
                        </div>

                        <div class="form-group">
                            <input class="form-control" type="tel" name="phone" placeholder="Phone Number">
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" name="bio" id="" cols="30" rows="10" placeholder="Bio"></textarea>
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