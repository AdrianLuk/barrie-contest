@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-around"><span class="text-uppercase">Dashboard</span><span class="text-uppercase">Welcome Back {{ Auth::user()->name }}</span></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <div class="card">
                    <h1 class="text-center py-4">What would you like to do?</h1>
                    <div class="row my-4 justify-content-around">
                        <a href="{{ route('inquiries.index') }}" class="btn btn-success">View Form Submissions</a>
                        <a href="{{ route('entries.index') }}" class="btn btn-primary">View Contest Entries</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
