@include('components.header')
@section('template_title')
    D Qr
@endsection
@include('components.navbar')

<body>
    <div class="container">
        <div class="row">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <div style="display: flex; justify-content: space-between; align-items: center;">

                                    <span id="card_title">
                                        {{ __('Data UniqCode') }}
                                    </span>

                                     {{-- <div class="float-right">
                                        <a href="{{ route('d-qrs.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                          {{ __('Create New') }}
                                        </a>
                                      </div> --}}
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

                                                {{-- <th>Qrid</th> --}}
                                                <th>Batchid</th>
                                                {{-- <th>Total</th> --}}
                                                <th>IP Address</th>
                                                <th>DateCreated</th>
                                                <th>Agent</th>
                                                <th>Kode Unik</th>

                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($dQrs as $dQr)
                                                <tr>
                                                    <td>{{ ++$i }}</td>

                                                    {{-- <td>{{ $dQr->qrid }}</td> --}}
                                                    <td>{{ $dQr->batchid }}</td>
                                                    {{-- <td>{{ $dQr->total }}</td> --}}
                                                    <td>{{ $dQr->ua }}</td>
                                                    <td>{{ $dQr->date }}</td>
                                                    <td>{{ $dQr->ip }}</td>
                                                    <td>{{ $dQr->kode_unik }}</td>

                                                    {{-- <td>
                                                        <form action="{{ route('d-qrs.destroy',$dQr->id) }}" method="POST">
                                                            <a class="btn btn-sm btn-primary " href="{{ route('d-qrs.show',$dQr->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                            <a class="btn btn-sm btn-success" href="{{ route('d-qrs.edit',$dQr->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                        </form>
                                                    </td> --}}
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        {!! $dQrs->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
