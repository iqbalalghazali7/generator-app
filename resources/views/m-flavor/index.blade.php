@include('components.header')
@section('template_title')
    M Flavor
@endsection

@include('components.navbar')
<body>
    <div class="container">
        <div class="row">
            @include('components.topbar')
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <div style="display: flex; justify-content: space-between; align-items: center;">

                                    <span id="card_title fw-bold">
                                        {{ __('PickList Flavor') }}
                                    </span>

                                     <div class="float-right">
                                        <a href="{{ route('m-flavor.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

                                                <th>Fl Id</th>
                                                <th>Name</th>
                                                <th>Action</th>

                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($mFlavors as $mFlavor)
                                                <tr>
                                                    <td>{{ ++$i }}</td>

                                                    <td>{{ $mFlavor->fl_id }}</td>
                                                    <td>{{ $mFlavor->name }}</td>

                                                    <td>
                                                        <form action="{{ route('m-flavor.destroy',$mFlavor->fl_id) }}" method="POST">
                                                            {{-- <a class="btn btn-sm btn-primary " href="{{ route('m-flavor.show',$mFlavor->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a> --}}
                                                            <a class="btn btn-sm btn-success" href="{{ route('m-flavor.edit',$mFlavor->fl_id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                        {!! $mFlavors->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

{{-- @include('components.footer') --}}
