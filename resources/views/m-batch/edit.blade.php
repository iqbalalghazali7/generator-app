@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} M Batch
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} M Batch</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('m-batches.update', $mBatch->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('m-batch.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
