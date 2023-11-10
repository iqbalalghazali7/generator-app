@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} M Package
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} M Package</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('m-packages.update', $mPackage->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('m-package.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
