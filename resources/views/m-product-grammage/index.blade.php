@include('components.header')
@section('template_title')
    M Product Grammage
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
                                        {{ __('PickList Product Grammage') }}
                                    </span>

                                     <div class="float-right">
                                        <a href="{{ route('m-product-grammage.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

                                                <th>Grammid</th>
                                                <th>Product Name</th>
                                                <th>Flavor</th>
                                                <th>Package</th>
                                                <th>Grammage</th>
                                                <th>Action</th>

                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($mProductGrammages as $mProductGrammage)
                                                <tr>
                                                    <td>{{ ++$i }}</td>

                                                    <td>{{ $mProductGrammage->grammid }}</td>
                                                    <td>{{ \App\Models\MProduct::where('prodid', $mProductGrammage->prodid)->value('name') }}</td>
                                                    <td>{{ \App\Models\MFlavor::where('fl_id', $mProductGrammage->fl_id)->value('name') }}</td>
                                                    <td>{{ \App\Models\MPackage::where('packid', $mProductGrammage->packid)->value('name') }}</td>
                                                    <td>{{ $mProductGrammage->gram }}</td>

                                                    <td>
                                                        <form action="{{ route('m-product-grammage.destroy',$mProductGrammage->grammid) }}" method="POST">
                                                            {{-- <a class="btn btn-sm btn-primary " href="{{ route('m-product-grammages.show',$mProductGrammage->grammid) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a> --}}
                                                            <a class="btn btn-sm btn-success" href="{{ route('m-product-grammage.edit',$mProductGrammage->grammid) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                        {!! $mProductGrammages->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
