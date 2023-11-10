@extends('layouts.app')

@section('template_title')
    {{ $dQrCode->name ?? "{{ __('Show') D Qr Code" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} D Qr Code</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('d-qr-codes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Qrcode:</strong>
                            {{ $dQrCode->qrcode }}
                        </div>
                        <div class="form-group">
                            <strong>Qrid:</strong>
                            {{ $dQrCode->qrid }}
                        </div>
                        <div class="form-group">
                            <strong>Qrcode Name:</strong>
                            {{ $dQrCode->qrcode_name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
