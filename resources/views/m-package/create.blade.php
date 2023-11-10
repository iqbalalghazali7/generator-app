@include('components.header')

@section('template_title')
    {{ __('Create') }} M Package
@endsection
@include('components.navbar')

<body>
    <div class="container">
        <div class="row">
            <section class="content container-fluid">
                <div class="row">
                    <div class="col-md-12">

                        @includeif('partials.errors')

                        <div class="card card-default">
                            <div class="card-header">
                                <span class="card-title">{{ __('Create') }} M Package</span>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('m-package.store') }}"  role="form" enctype="multipart/form-data">
                                    @csrf

                                    @include('m-package.form')

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>
