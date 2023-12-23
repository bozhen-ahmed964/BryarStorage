@extends('layouts.user')

@section('title', 'Home')

@section('content')
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12 col-md-6 text-start">
                <h5 class="fw-bold">All Folders Created</h5>
            </div>
            <div class="col-12 col-md-6 text-center text-md-end">
                <a href="#" class="btn btn-info btn-lg active" role="button" aria-pressed="true">
                    <i class="far fa-folder" style="font-weight: bold;"></i> Create New Folder
                </a>
                <div class="dropdown">
                    <button class="btn btn-info btn-lg dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="far fa-file" style="font-weight: bold;"></i> Create New File
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="#">Upload New File</a></li>
                        <li><a class="dropdown-item" href="#">Create New File</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            @foreach (range(1, 64) as $item)
                <div class="col-6 col-md-3 col-lg-2" style="margin-top: 30px;">
                    <div class="card" data-animation="true">
                        <div class="card-header p-0 position-relative mt-5 mx-3 z-index-1">
                            <div class="row">
                                <div class="col-6 text-start">
                                    <small style="font-weight: bold;">8 files</small>
                                </div>
                                <div class="col-6 text-end">
                                    <span class="d-xl-flex justify-content-xl-end" style="font-weight: bold;"> <i
                                            class="far fa-user" style="font-weight: bold;"></i> 4</span>
                                </div>
                            </div>
                            <div style="text-align: center; font-size:100px"><i class="fas fa-folder"></i></div>
                            <div class="row align-items-center">
                                <div class="col-8 text-start">
                                    <p class="text-sm">All Content</p>
                                </div>
                                <div class="col-4 text-end">
                                    <div style="text-align: right;">
                                        <i class="far fa-star" style="font-size: 20px; cursor: pointer;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body text-center">
                            <div class="d-flex mt-n6 mx-auto">
                                <a class="btn btn-link text-primary ms-auto border-0" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Refresh">
                                    <i class="material-icons text-lg">refresh</i>
                                </a>
                                <button class="btn btn-link text-info me-auto border-0" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Edit">
                                    <i class="material-icons text-lg">edit</i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <h6>slaw</h6>

<<<<<<< HEAD
        @endsection
=======

@endsection
>>>>>>> 5e226e820b8530d3f8521d4c0be49c09738e2eb1
