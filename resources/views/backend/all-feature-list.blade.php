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
           @if (isset($features))
               @foreach($features as $feature)
                    <div class="col-md-4">
                        <div class="tile">
                            <div class="wrapper">




                                <div class="title-paragraph">
                                    <p>{{$feature->feature}}</p>
                                </div>

                                <div class="stats">



                                </div>



                                <div class="footer">
                                    <a href="{!! route('dashboard.changing.feature.edit', $feature->id) !!}" class="Cbtn Cbtn-primary">Edit</a>
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
