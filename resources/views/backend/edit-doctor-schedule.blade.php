@extends('layouts.backend')
@section('title','')
@push('css')
@endpush

@section('content')
  <main class="page-content">

    <div class="container-fluid">

      <div class="row">
        <div>

        </div>

        <div class="col-lg-9">
          <!-- error message  -->
          @if ($errors->any())

            @foreach ($errors->all() as $error)
              <div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                {{ $error }}
              </div>
            @endforeach


          @endif

          <div class="card"></div>
          <div class="container post_create">
            <p>Add Schedule</p>
          </div>

          <div class="container add_option" style="padding:0px 5px; margin-bottom:15px;">

            <form class="" action="{{ route('dashboard.schedule.post') }}" method="post" enctype="multipart/form-data">
              @csrf

              <div class="input-group mt-3">
                <select name="type" class="custom-select" id="inputGroupSelect03"
                        aria-label="Example select with button addon">
                  <option selected disabled>You are Doctor or Health Org?</option>
                  <option id="docselect" value="doctor">Doctor</option>
                  <option id="orgselect" value="org">Health Org</option>
                </select>
              </div>

              <div style="display:;" class="doctorinfo">
                <div class="form-group" >
                  <label for="exampleFormControlInput1">Doctor name</label>
                  <input name="doctor_name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Doctor Name">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Education</label>
                  <input type="text" name="education_details" class="form-control" id="exampleFormControlInput1" placeholder="Education Detalis">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Job</label>
                  <input type="text" name="org_name" class="form-control" id="exampleFormControlInput1" placeholder="Org Name">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Specialist</label>
                  <input type="text" name="speciality" class="form-control" id="exampleFormControlInput1" placeholder="Surgery">
                </div>
              </div>
                <div class="form-row schedule-form">
                    <div class="form-group col-md-4">
                        <label for="inputAddress">Visiting Place</label>
                        <input type="text" name="visiting_place" class="form-control" id="inputAddress" placeholder="visiting place">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputAddress">Floor No</label>
                        <input type="number" name="floor_number" class="form-control" id="inputAddress" placeholder="floor number">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputAddress">Room No</label>
                        <input type="number" name="room_number" class="form-control" id="inputAddress" placeholder="room number">
                    </div>


                </div>

              <div class="form-row schedule-form">
                <div class="form-group col-md-4">
                  <label for="inputAddress">Start Time</label>
                  <input type="time" name="start_time" class="form-control" id="inputAddress" placeholder="Start Time">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputAddress">End Time</label>
                  <input type="time" name="end_time" class="form-control" id="inputAddress" placeholder="End Time">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputAddress">Day</label>
                  <input type="text" name="days" class="form-control" id="inputAddress" placeholder="Saturday - Friday">
                </div>

                <div class="form-group col-md-4">
                  <label for="inputAddress">Experience</label>
                  <input type="text" name="experience" class="form-control" id="inputAddress" placeholder="Experience">
                </div>

                <div class="form-group col-md-4">
                  <label for="inputAddress">Image</label>
                  <input type="file" name="image" class="form-control" id="inputAddress" placeholder="Image">
                </div>


              </div>



              <button type="submit" class="btn btn-success btn-block mb-2">Post</button>
            </form>
          </div>
        </div>
        <div class="col-lg-3">

        </div>

      </div>
    </div>

  </main>
  <!-- page-content" -->
  @endsection

@push('js')
  @endpush