@extends('layouts.app')

@section('template_title')
    {{ $mPackage->name ?? "{{ __('Show') M Package" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} M Package</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('m-packages.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Packid:</strong>
                            {{ $mPackage->packid }}
                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $mPackage->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
