
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
    <div class="container-fluid">






      



          <div class="row row-margin-bottom">


            @if (isset($schedules))
              @foreach($schedules as $schedule)
                <div class="col-md-5 no-padding lib-item" data-category="view">
                  <div class="lib-panel">
                    <div class="row box-shadow">
                      <div class="col-md-6">
                        <img class="lib-img-show" src="{!! asset($schedule->image) !!}" alt="{{$schedule->doctor_name.'-'.$schedule->speciality}}">
                      </div>
                      <div class="col-md-6">
                        <div class="lib-row lib-header">
                         {{$schedule->doctor_name}}
                          <div class="lib-header-seperator"></div>
                        </div>
                        <div class="lib-row lib-desc">
                          <p><b>Organization : </b>{{$schedule->org_name}}</p>
                          <p><b>Speciality : </b>{{$schedule->speciality}}</p>
                          <p><b>Visiting Place : </b>{{$schedule->visiting_place}}</p>
                          <p><b>Start Time : </b>{{date("g:iA", strtotime($schedule->start_time))}}</p>
                          <p><b>End Time : </b>{{date("g:iA", strtotime($schedule->end_time))}}</p>
                          <p><b></b></p>
                        </div>
                      </div>

                    </div>


                  </div>


                  <a href="{{route('dashboard.schedule.edit.form', $schedule->id)}}"> <button class="btn btn-success">Edit</button></a> <a href=""><button class="btn btn-danger">Delete</button></a>
                </div>
                <div class="col-md-1"></div>
              @endforeach
            @endif

          </div>



</div>
        

  


  </main>
  <!-- page-content" -->

@endsection

@push('js')
@endpush