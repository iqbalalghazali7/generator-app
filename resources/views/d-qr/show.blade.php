@extends('layouts.app')

@section('template_title')
    {{ $dQr->name ?? "{{ __('Show') D Qr" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} D Qr</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('d-qrs.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Qrid:</strong>
                            {{ $dQr->qrid }}
                        </div>
                        <div class="form-group">
                            <strong>Batchid:</strong>
                            {{ $dQr->batchid }}
                        </div>
                        <div class="form-group">
                            <strong>Total:</strong>
                            {{ $dQr->total }}
                        </div>
                        <div class="form-group">
                            <strong>Ua:</strong>
                            {{ $dQr->ua }}
                        </div>
                        <div class="form-group">
                            <strong>Date:</strong>
                            {{ $dQr->date }}
                        </div>
                        <div class="form-group">
                            <strong>Ip:</strong>
                            {{ $dQr->ip }}
                        </div>
                        <div class="form-group">
                            <strong>Kode Unik:</strong>
                            {{ $dQr->kode_unik }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
