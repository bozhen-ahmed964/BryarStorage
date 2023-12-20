@extends('layouts.user')

@section('title', 'Home')

@section('content')
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12 col-md-6 text-start">
                <p>All Folders Created</p>
            </div>
            <div class="col-12 col-md-6 text-center text-md-end"><button class="btn btn-primary border rounded"
                    type="button">Create
                    New Folder </button>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            @foreach (range(1, 64) as $item)
                <div class="col-6 col-md-3 col-lg-2" style="margin-top: 10px;">
                    <div class="card border rounded border-1 shadow">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 text-start">
                                    <small style="font-weight: bold;">8 files</small>
                                </div>
                                <div class="col-6 text-end">
                                    <span class="d-xl-flex justify-content-xl-end" style="font-weight: bold;"><i
                                            class="far fa-user" style="font-weight: bold;"></i> 4</span>
                                </div>
                            </div>
                            <div style="text-align: center; font-size:100px"><i class="fas fa-folder"></i></div>
                            <div class="row align-items-center">
                                <div class="col-8 text-start">
                                    <p class="text-sm">All Content</p>
                                </div>
                                <div class="col-4 text-end">
                                    <div style="text-align: right;"><i class="far fa-star" style="font-size: 20px;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
