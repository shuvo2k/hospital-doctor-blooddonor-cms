@extends('layouts.backend')
@section('title','')
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
      @if (isset($generalinfos))
        @foreach($generalinfos as $info)
      <div class="col-md-6" style="margin-bottom:30px;">
        <div class="tile">
          <div class="wrapper">




            <div class="title-paragraph">
              <p><b>Company/Doctor Name : </b>{{$info->company_name}}</p>
              <p><b>Address : </b>{{$info->address}}</p>
              <p><b>Public Email : </b>{{$info->public_email}}</p>
              <p><b>Facebook Link : </b>{{$info->facebook_link}}</p>
              <p><b>Mobile No : </b>{{$info->mobile_no}}</p>
              <p><b>Telephone No : </b>{{$info->telephone_no}}</p>
              <p><b>Country : </b>{{$info->country}}</p>
              <p><b>City : </b>{{$info->city}}</p>
              @if (isset($info->state))
                <p><b>State : </b>{{$info->state}}</p>
              @endif
            </div>

            <div class="stats">



            </div>



            <div class="footer">
              <a href="{!! route('dashboard.generalinfo.edit', $info->id) !!}" class="Cbtn Cbtn-primary">Edit</a>
              <a href="#" class="Cbtn Cbtn-danger">Delete</a>
            </div>
          </div>
        </div>
        <!-- page-content" -->
      </div>
          <br> <br>
@endforeach
        @endif
    </div>

  </main>
@endsection

@push('js')



@endpush
