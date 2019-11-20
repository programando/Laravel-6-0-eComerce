
@extends('layouts.app')

@section('content')


<div class="container">

      <lista-productos/>

    <div class='actions text-center'>
        {{ $products->links() }}
    </div>

</div>

@endsection

