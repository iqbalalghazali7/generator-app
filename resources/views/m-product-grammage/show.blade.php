@extends('layouts.app')

@section('template_title')
    {{ $mProductGrammage->name ?? "{{ __('Show') M Product Grammage" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} M Product Grammage</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('m-product-grammages.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Grammid:</strong>
                            {{ $mProductGrammage->grammid }}
                        </div>
                        <div class="form-group">
                            <strong>Prodid:</strong>
                            {{ $mProductGrammage->prodid }}
                        </div>
                        <div class="form-group">
                            <strong>Fl Id:</strong>
                            {{ $mProductGrammage->fl_id }}
                        </div>
                        <div class="form-group">
                            <strong>Packid:</strong>
                            {{ $mProductGrammage->packid }}
                        </div>
                        <div class="form-group">
                            <strong>Gram:</strong>
                            {{ $mProductGrammage->gram }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
