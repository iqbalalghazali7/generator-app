@extends('layouts.app')

@section('template_title')
    {{ $dOutletGroup->name ?? "{{ __('Show') D Outlet Group" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} D Outlet Group</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('d-outlet-groups.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Ogrpid:</strong>
                            {{ $dOutletGroup->ogrpid }}
                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $dOutletGroup->name }}
                        </div>
                        <div class="form-group">
                            <strong>City:</strong>
                            {{ $dOutletGroup->city }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
