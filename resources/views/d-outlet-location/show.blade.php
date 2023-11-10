@extends('layouts.app')

@section('template_title')
    {{ $dOutletLocation->name ?? "{{ __('Show') D Outlet Location" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} D Outlet Location</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('d-outlet-locations.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Locid:</strong>
                            {{ $dOutletLocation->locid }}
                        </div>
                        <div class="form-group">
                            <strong>Ogrpid:</strong>
                            {{ $dOutletLocation->ogrpid }}
                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $dOutletLocation->name }}
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $dOutletLocation->address }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
