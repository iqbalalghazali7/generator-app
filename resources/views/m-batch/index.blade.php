@include('components.header')

@section('template_title')
    M Batch
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
                                        {{ __('Batch Production') }}
                                    </span>

                                     <div class="float-right">
                                        <a href="{{ route('m-batch.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

                                                <th>Batchid</th>
                                                <th>Grammid</th>
                                                <th>Manufactur Dt</th>
                                                <th>Exp Dt</th>
                                                <th>Action</th>

                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($mBatches as $mBatch)
                                                <tr>
                                                    <td>{{ ++$i }}</td>

                                                    <td>{{ $mBatch->batchid }}</td>
                                                    <td>{{ $mBatch->grammid }}</td>
                                                    <td>{{ $mBatch->man_dt }}</td>
                                                    <td>{{ $mBatch->exp_dt }}</td>

                                                    <td>
                                                        <form action="{{ route('m-batch.destroy',$mBatch->batchid) }}" method="POST">
                                                            {{-- <a class="btn btn-sm btn-primary " href="{{ route('m-batch.show',$mBatch->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a> --}}
                                                            <a class="btn btn-sm btn-success" href="{{ route('m-batch.edit',$mBatch->batchid) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                            <a class="btn btn-sm btn-info" href="{{route('Dqr.create')}}"><i class="fa fa-fw fa-edit"></i> {{ __('Generate UniqCode') }}</a>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        {!! $mBatches->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
