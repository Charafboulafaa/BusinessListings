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
                                <td></td>
                                <td></td>
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
