@extends('layouts.app')

@section('template_title')
    {{ $mFlavor->name ?? "{{ __('Show') M Flavor" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} M Flavor</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('m-flavors.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fl Id:</strong>
                            {{ $mFlavor->fl_id }}
                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $mFlavor->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
