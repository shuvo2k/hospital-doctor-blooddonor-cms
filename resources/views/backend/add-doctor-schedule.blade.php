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
          <div class="card"></div>
          <div class="container post_create">
            <p>Add Schedule</p>
          </div>

          <div class="container add_option" style="padding:0px 5px; margin-bottom:15px;">

            <form class="" action="#" method="post">

              <div class="input-group mt-3">
                <select name=""class="custom-select" id="inputGroupSelect03"
                        aria-label="Example select with button addon">
                  <option selected disabled>You are Doctor or Health Org?</option>
                  <option id="docselect" value="doctor">Doctor</option>
                  <option id="orgselect" value="org">Health Org</option>
                </select>
              </div>

              <div style="display:;" class="doctorinfo">
                <div class="form-group" >
                  <label for="exampleFormControlInput1">Doctor name</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Doctor Name">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Education</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Education Detalis">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Job</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Org Name">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Specialist</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Surgery">
                </div>
              </div>


              <div class="form-row schedule-form">
                <div class="form-group col-md-4">
                  <label for="inputAddress">Start Time</label>
                  <input type="time" class="form-control" id="inputAddress" placeholder="Start Time">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputAddress">End Time</label>
                  <input type="time" class="form-control" id="inputAddress" placeholder="End Time">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputAddress">Day</label>
                  <input type="day" class="form-control" id="inputAddress" placeholder="Saturday - Friday">
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