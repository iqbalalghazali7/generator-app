<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
         <img src="{{asset('images/sab-logo.png')}}" alt="" height="100">
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="{{ url('/') }}" class="nav-link px-2 link-secondary">Home</a></li>
        <li><a href="{{route('uniqcode.index')}}" class="nav-link px-2 link-dark">Data Unicode</a></li>
        <li><a href="{{route('m-batch.index')}}" class="nav-link px-2 link-dark">Create Batch</a></li>
        <li><a href="{{route('Dqr.create')}}" class="nav-link px-2 link-dark">Generator</a></li>
        <li><a href="{{route('m-product.index')}}" class="nav-link px-2 link-dark">PickList Product</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <img src="{{asset('images/abbot.png')}}" alt="" height="100">
      </div>
    </header>
</div>
