@extends('layouts.app')

@section('template_title')
    {{ $mQrStatus->name ?? "{{ __('Show') M Qr Status" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} M Qr Status</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('m-qr-statuses.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Qrstid:</strong>
                            {{ $mQrStatus->qrstid }}
                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $mQrStatus->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
