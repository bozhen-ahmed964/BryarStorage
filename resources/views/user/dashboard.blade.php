@extends('layouts.user')

@section('title', 'Home')

@section('content')
    <div class="main mt-5 p-4 rounded" style="background-color: rgb(30,41,51, 0.8)">
        <div class="w-100 h-10 p-2 rounded">
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search Here..." aria-label="Search">
                        <button class="btn btn-primary" type="button">Search</button>
                    </div>
                </div>
                <div class="col-md-6 text-end">
                    <a href="#" id="profile-icon" class="text-light py-3 px-3 border rounded-circle">
                        <i class="fa-solid fa-user fa-lg"></i>
                    </a>
                </div>
            </div>

        </div>
        <h3 class="text-light mt-2">My Folders</h3>

        <div class="w-100 h-10 p-2 rounded">
            <div class="row">

                <div class="col-md-6 text-start text-light">
                    <h6 class="bg-dark p-2 border rounded"> ( 5 ) folder selected | total size 3GB</h6>
                </div>

                <div class="col-md-6 text-end">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Create New +
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                                <a class="dropdown-item" href="#"><i class="fa-solid fa-user fa-fw"></i> Option 1</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><i class="fa-solid fa-cog fa-fw"></i> Option 2</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><i class="fa-solid fa-envelope fa-fw"></i> Option 3</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><i class="fa-solid fa-chart-bar fa-fw"></i> Option 4</a>
                            </li>
                        </ul>
                    </div>
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
                                        <a href="#" class="text-dark">
                                            <i class="far fa-star" style="font-size: 18px"></i>
                                        </a>
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
