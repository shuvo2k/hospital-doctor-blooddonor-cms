@extends('layouts.backend')
@section('title','Nearest Hotels List')
@push('css')
@endpush

@section('content')

  <main class="page-content">
    <!-- session message -->
    @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session('success') }}
      </div>
    @endif

    <div class="row">
      @if (isset($hotels))
        @foreach($hotels as $hotel)
      <div class="col-md-4">
        <div class="tile">
          <div class="wrapper">


            <div class="banner-img">
              <img src="{!! asset($hotel->image) !!}" alt="Image 1">
            </div>

            <div class="content-hotel">
              <div class="title-header">
                <h1>{{$hotel->hotel_name}}</h1>
              </div>

              <div class="stats">
                <p>{{$hotel->address}}</p>


              </div>
            </div>



            <div class="footer">
              <a href="{{route('dashboard.nearest.hotel.edit', $hotel->id)}}" class="Cbtn Cbtn-primary">View</a>
              <a href="#" class="Cbtn Cbtn-danger">Delete</a>
            </div>
          </div>
        </div>
        <!-- page-content" -->
      </div>
    @endforeach
        @endif
    </div>

  </main>
@endsection

@push('js')
@endpush