@include('components.header')

@section('template_title')
    D Outlet Location
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
                                        {{ __('PickList Outlet Location') }}
                                    </span>

                                     <div class="float-right">
                                        <a href="{{ route('outletloc.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

                                                <th>Locid</th>
                                                <th>Outlet Group</th>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>Action</th>

                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($dOutletLocations as $dOutletLocation)
                                                <tr>
                                                    <td>{{ ++$i }}</td>

                                                    <td>{{ $dOutletLocation->locid }}</td>
                                                    <td>{{ \App\Models\DOutletGroup::where('ogrpid', $dOutletLocation->ogrpid)->value('name') }}</td>
                                                    <td>{{ $dOutletLocation->name }}</td>
                                                    <td>{{ $dOutletLocation->address }}</td>

                                                    <td>
                                                        <form action="{{ route('outletloc.destroy',$dOutletLocation->locid) }}" method="POST">
                                                            {{-- <a class="btn btn-sm btn-primary " href="{{ route('d-outlet-locations.show',$dOutletLocation->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a> --}}
                                                            <a class="btn btn-sm btn-success" href="{{ route('outletloc.edit',$dOutletLocation->locid) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                        {!! $dOutletLocations->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
