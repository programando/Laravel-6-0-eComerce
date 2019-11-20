@extends ('layouts.app')

@section('content')
<div class="container">
  <div class="card padding">
    <header>
      <h2> Mi carrito de compra </h2>
    </header>

    <div class="card-body">
    <div class="row">

    <div class="col-12 col-md-6 ">
      <product-list></product-list>
    </div>

    <div class="col-12 col-md-6 payment">
          <p> Paga tus productos fácilmente con cualquier de estos medio de pago</p>
          <img src="" alt="">
          <img src="" alt="">
          <div>
            <a href="" class="btn btn-primary"> Proceder con el pago</a>
          </div>
    <div>

    </div>

    </div>
  </div>
</div>
@endsection