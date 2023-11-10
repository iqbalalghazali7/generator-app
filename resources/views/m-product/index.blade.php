@include('components.header')
@section('template_title')
    M Product
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

                                    <span id="card_title">
                                        {{ __('Picklist Product') }}
                                    </span>

                                     <div class="float-right">
                                        <a href="{{ route('m-product.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

                                                <th>Prodid</th>
                                                <th>Name</th>
                                                <th>Action</th>

                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($mProducts as $mProduct)
                                                <tr>
                                                    <td>{{ ++$i }}</td>

                                                    <td>{{ $mProduct->prodid }}</td>
                                                    <td>{{ $mProduct->name }}</td>

                                                    <td>
                                                        <form action="{{ route('m-product.destroy',$mProduct->prodid) }}" method="POST">
                                                            {{-- <a class="btn btn-sm btn-primary " href="{{ route('m-product.show',$mProduct->prodid) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a> --}}
                                                            <a class="btn btn-sm btn-success" href="{{ route('m-product.edit',$mProduct->prodid) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                        {!! $mProducts->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
