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
            @if (isset($blogposts))
                @foreach($blogposts as $post)
                        <div class="col-md-4">
                            <div class="tile">
                                <div class="wrapper">


                                    <div class="banner-img">
                                        <img src="{!! asset($post->image) !!}" alt="{{$post->title}}">
                                    </div>

                                    <div class="title-header">
                                        <h1>{{$post->title}}</h1>
                                    </div>

                                    <div class="stats">



                                    </div>



                                    <div class="footer">
                                        <a href="{{route('dashboard.blogpost.edit', $post->id)}}" class="Cbtn Cbtn-primary">Edit</a>
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