@include('components.header')
@section('template_title')
    M Package
@endsection
@include('components.navbar')

<body>
    <div class="container">
        <div class="row">
            <div class="container-fluid">
                <div class="row">
                    @include('components.topbar')
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <div style="display: flex; justify-content: space-between; align-items: center;">

                                    <span id="card_title">
                                        {{ __('PickList Package') }}
                                    </span>

                                     <div class="float-right">
                                        <a href="{{ route('m-package.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                          {{ __('Create New') }}
                                        </a>
                                      </div>
                                </div>
                            </div>
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead class="thead">
                                            <tr>
                                                <th>No</th>

                                                <th>Packid</th>
                                                <th>Name</th>
                                                <th>Action</th>

                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($mPackages as $mPackage)
                                                <tr>
                                                    <td>{{ ++$i }}</td>

                                                    <td>{{ $mPackage->packid }}</td>
                                                    <td>{{ $mPackage->name }}</td>

                                                    <td>
                                                        <form action="{{ route('m-package.destroy',$mPackage->packid) }}" method="POST">
                                                            {{-- <a class="btn btn-sm btn-primary " href="{{ route('m-packages.show',$mPackage->packid) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a> --}}
                                                            <a class="btn btn-sm btn-success" href="{{ route('m-package.edit',$mPackage->packid) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        {!! $mPackages->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
