@extends('layouts.user')

@section('title', 'Home')



@section('content')
    <div class="col-md-10 p-4 rounded">
        <div class="container mt-3">
            <div class="w-100 h-10 p-2 rounded">
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search Here..." aria-label="Search">
                            <button class="btn btn-success" type="button">Search</button>
                        </div>
                    </div>
                    <div class="col-md-6 text-end">
                        <a href="#" id="profile-icon"
                            class="text-dark py-4 px-4 border border-success rounded-circle">
                            <i class="fa-solid fa-user fa-lg"></i>
                        </a>
                    </div>
                </div>

            </div>
            <div class="row mt-4">
                <div class="col-md-6 text-start border rounded p-1">

                    <h6 class="text-dark fs-4 text-capitalize text-opacity-50 "> <a href="#">

                            <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 384 512">
                                <path
                                    d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                            </svg></a> ( 5 ) folder selected | total size 3GB
                    </h6>
                </div>
            </div>

            <div class="w-100 h-10 p-2 rounded">
                <div class="row">

                    <div class="col-md-6 text-start">
                        <h3 class="text-dark">My Folders</h3>
                    </div>

                    <div class="col-md-6 text-end">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle btn-dark" type="button" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Create New +
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li>
                                    <a class="dropdown-item" href="#"><i class="fa-solid fa-user fa-fw"></i> Option
                                        1</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"><i class="fa-solid fa-cog fa-fw"></i> Option
                                        2</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"><i class="fa-solid fa-envelope fa-fw"></i>
                                        Option
                                        3</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"><i class="fa-solid fa-chart-bar fa-fw"></i>
                                        Option
                                        4</a>
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
                                        <span style="font-weight: bold; font-size: 12px;">8 files</span>
                                    </div>
                                    <div class="col" style="text-align: right">
                                        <span class="d-xl-flex justify-content-xl-end"
                                            style="font-weight: bold; font-size: 12px"><i class="far fa-user"
                                                style="font-weight: bold;"></i> 4</span>
                                    </div>
                                </div>
                                <div style="text-align: center">
                                    <i class="fas fa-folder" style="font-size: 100px; color:rgb(14, 104, 39)   "></i>
                                </div>
                                <div class="row">
                                    <div class="col" style="font-size: 12px">
                                        <p>All Content</p>
                                    </div>
                                    <div class="col">
                                        <div style="text-align: right">
                                            <a href="#" class="text-dark">
                                                <i class="far fa-star text-warning" style="font-size: 18px;"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <style>
                    .logList li {
                        padding-bottom: 1rem;
                    }
                </style>

                <div class="container d-flex mt-5">
                    <div style="width:30vh; height:30vh;">
                        <canvas id="pieChart"></canvas>
                    </div>
                    <div>
                        <ul class="list-unstyled logList">
                            <li>
                                <div class="d-xl-flex justify-content-between align-items-center align-items-xl-center"
                                    style="width: 230px;"><small>Image</small><small>3.5GB</small></div>
                                <div>
                                    <div class="progress border rounded" style="width: 230px;">
                                        <div class="progress-bar bg-dark" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100" style="width: 50%;">50%</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-xl-flex justify-content-between align-items-center align-items-xl-center"
                                    style="width: 230px;"><small>Video</small><small>3.5GB</small></div>
                                <div>
                                    <div class="progress border rounded" style="width: 230px;">
                                        <div class="progress-bar bg-dark" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100" style="width: 50%;">50%</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-xl-flex justify-content-between align-items-center align-items-xl-center"
                                    style="width: 230px;"><small>Audio</small><small>3.5GB</small></div>
                                <div>
                                    <div class="progress border rounded" style="width: 230px;">
                                        <div class="progress-bar bg-dark" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100" style="width: 50%;">50%</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-xl-flex justify-content-between align-items-center align-items-xl-center"
                                    style="width: 230px;"><small>Documents</small><small>3.5GB</small></div>
                                <div>
                                    <div class="progress border rounded" style="width: 230px;">
                                        <div class="progress-bar bg-dark" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100" style="width: 50%;">50%</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-xl-flex justify-content-between align-items-center align-items-xl-center"
                                    style="width: 230px;"><small>Other Files</small><small>3.5GB</small></div>
                                <div>
                                    <div class="progress border rounded" style="width: 230px;">
                                        <div class="progress-bar bg-dark" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100" style="width: 50%;">50%</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>


                <hr class="mt-5 mx-auto rounded">


                <style>
                    hr.rounded {
                        border-top: 3px solid;
                        border-radius: 5px;
                        width: 98%;
                        color: black
                    }
                </style>

                <div class="mt-1">
                    <h3 class="text-dark">Recent</h3>
                    @foreach (range(1, 6) as $item)
                        <div class="card mt-3">
                            <div class="card-body w-100 d-flex justify-content-between">
                                <div><i class="far fa-image fs-4 " style="color:rgb(14, 104, 39)"></i></div>
                                <div>lorem10</div>
                                <div>10 June 2021</div>
                                <div>1.5MB</div>
                                <div class="text-center">
                                    <div class="dropdown">
                                        <div class="dropdown-toggle btn-danger" type="button" id="dropdownMenuButton"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-ellipsis-h"></i>
                                        </div>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    Option 1</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#"> Option
                                                    2</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    Option
                                                    3</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    Option
                                                    4</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            var data = [50, 25, 25, 10, 30];
            var labels = ['Image', 'Document', 'Audio', 'Video', 'Other files'];
            var ctx = document.getElementById('pieChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Pie Chart',
                        data: data,
                        backgroundColor: [
                            'rgba(255, 99, 132, 5.9)',
                            'rgba(54, 162, 235, 5.9)',
                            'rgba(255, 206, 86, 5.9)',
                            'rgba(75, 192, 192, 5.9)',
                            'rgba(153, 102, 255, 5.9)'
                        ],
                    }]
                },
                options: {
                    plugins: {
                        legend: {
                            display: true,
                            position: 'bottom',
                        }
                    }
                }
            });
        </script>
    @endsection
