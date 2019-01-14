@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">Your Listings
                    <span class="float-right"><a class="btn btn-success btn-sm" href="/listings/create">New Listing</a></span>
                </div>

                <div class="card-body">
                    @if(count($listings)>0)
                        <table class="table table-striped">
                            <tr>
                                <th>Company Name</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($listings as $listing)
                            <tr>
                                <td>{{ $listing->name }}</td>
                                <td>
                                    <a class="btn btn-light btn-sm" href="/listings/{{$listing->id}}/edit">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ action('ListingsController@destroy', $listing->id) }}" method="POST" onSubmit="return confirm('are you sure ?')">
                                        <input name="_method" type="hidden" value="DELETE">
                                        <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                        <input class="btn btn-danger btn-sm" type="submit" value="Delete">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
