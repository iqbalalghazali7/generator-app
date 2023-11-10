@extends('layouts.app')

@section('template_title')
    {{ $mBatch->name ?? "{{ __('Show') M Batch" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} M Batch</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('m-batches.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Batchid:</strong>
                            {{ $mBatch->batchid }}
                        </div>
                        <div class="form-group">
                            <strong>Grammid:</strong>
                            {{ $mBatch->grammid }}
                        </div>
                        <div class="form-group">
                            <strong>Man Dt:</strong>
                            {{ $mBatch->man_dt }}
                        </div>
                        <div class="form-group">
                            <strong>Exp Dt:</strong>
                            {{ $mBatch->exp_dt }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
