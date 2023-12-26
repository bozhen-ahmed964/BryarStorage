@extends('layouts.user')

@section('title', 'Home')

@section('content')
    <div class="main mt-5 p-4 rounded" style="background-color: rgb(30,41,51, 0.8)">
        <div class="w-100 h-10 p-2 bg-primary rounded">
            <div class="row">
                <div class="col-md-6 text-start">
                    <h4>Searchable</h4>
                </div>
                <div class="col-md-6 text-end">
                    <h4>Image SVG</h4>
                </div>
            </div>
        </div>
        <h3 class="text-light">My Folders</h3>

        <div class="w-100 h-10 p-2 bg-success rounded">
            <div class="row">
                <div class="col-md-6 text-start">
                    <h4>Selected (7)</h4>
                </div>
                <div class="col-md-6 text-end">
                    <h4>Button Actions</h4>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach (range(1, 8) as $item)
                <div class="col-md-3" style="margin-top: 10px">
                    <div class="card border rounded border-1 shadow">
                        <div class="card-body border rounded">
                            <div class="row">
                                <div class="col">
                                    <span style="font-weight: bold; font-size: 12px">8 files</span>
                                </div>
                                <div class="col" style="text-align: right">
                                    <span class="d-xl-flex justify-content-xl-end"
                                        style="font-weight: bold; font-size: 12px"><i class="far fa-user"
                                            style="font-weight: bold"></i> 4</span>
                                </div>
                            </div>
                            <div style="text-align: center">
                                <i class="fas fa-folder" style="font-size: 100px"></i>
                            </div>
                            <div class="row">
                                <div class="col" style="font-size: 12px">
                                    <p>All Content</p>
                                </div>
                                <div class="col">
                                    <div style="text-align: right">
                                        <i class="far fa-star" style="font-size: 18px"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


            <style>
                /* Rounded border */
                hr.rounded {
                    border-top: 3px solid;
                    border-radius: 5px;
                    width: 98%;
                    color: black
                }
            </style>
            <hr class="mt-5 mx-auto rounded">

            <div class="mt-1">
                <h3 class="text-light">Recent</h3>
                <div class="card mt-3">
                    <div class="card-body w-100 d-flex justify-content-between">
                        <div><i class="far fa-image fs-4"></i></div>
                        <div>lorem10</div>
                        <div>10 June 2021</div>
                        <div>1.5MB</div>
                        <div class="text-center"><i class="fas fa-ellipsis-h"></i></div>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body w-100 d-flex justify-content-between">
                        <div><i class="far fa-image fs-4"></i></div>
                        <div>Image06.jpeg</div>
                        <div>10 June 2021</div>
                        <div>1.5MB</div>
                        <div class="text-center"><i class="fas fa-ellipsis-h"></i></div>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body w-100 d-flex justify-content-between">
                        <div><i class="far fa-image fs-4"></i></div>
                        <div>Image06.jpeg</div>
                        <div>10 June 2021</div>
                        <div>1.5MB</div>
                        <div class="text-center"><i class="fas fa-ellipsis-h"></i></div>
                    </div>
                </div>
            </div>

        </div>

    @endsection
