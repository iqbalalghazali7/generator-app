@include('components.header')
@section('template_title')
    D Outlet Group
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
                                        {{ __('PickList Outlet Group') }}
                                    </span>

                                     <div class="float-right">
                                        <a href="{{ route('outletgroup.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

                                                <th>Ogrpid</th>
                                                <th>Name</th>
                                                <th>City</th>
                                                <th>Action</th>

                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($dOutletGroups as $dOutletGroup)
                                                <tr>
                                                    <td>{{ ++$i }}</td>

                                                    <td>{{ $dOutletGroup->ogrpid }}</td>
                                                    <td>{{ $dOutletGroup->name }}</td>
                                                    <td>{{ $dOutletGroup->city }}</td>

                                                    <td>
                                                        <form action="{{ route('outletgroup.destroy',$dOutletGroup->ogrpid) }}" method="POST">
                                                            {{-- <a class="btn btn-sm btn-primary " href="{{ route('d-outlet-groups.show',$dOutletGroup->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a> --}}
                                                            <a class="btn btn-sm btn-success" href="{{ route('outletgroup.edit',$dOutletGroup->ogrpid) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                        {!! $dOutletGroups->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
