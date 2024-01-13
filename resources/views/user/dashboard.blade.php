@extends('layouts.user')

@section('title', 'Home')

@section('content')
    <div class="mt-2 p-4 rounded bg-light ">
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
                    <h6 class="bg-success p-2 border rounded"> ( 5 ) folder selected | total size 3GB</h6>
                </div>

                <div class="col-md-6 text-end">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle btn-danger" type="button" id="dropdownMenuButton"
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
                                <a class="dropdown-item" href="#"><i class="fa-solid fa-envelope fa-fw"></i> Option
                                    3</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><i class="fa-solid fa-chart-bar fa-fw"></i> Option
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
                                <i class="fas fa-folder" style="font-size: 100px; color:rgb(43, 90, 209)   "></i>
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


            <div class="container d-flex justify-content-between mt-5">
                <div style="width:30vh; height:30vh;">
                    <canvas id="pieChart"></canvas>
                </div>
                <div class="table bg-transparent text-start ">
                    <div class="table-responsive text-start">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td>
                                        <i class="far fa-image fs-5"></i>
                                        <small style="margin-left: 5px; font-size: 14px">Image</small>
                                        <div class="progress">
                                            <div class="progress-bar" aria-valuenow="50" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 50%">
                                                50%
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <small style="font-size: 14px">3.4GB</small>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="far fa-file-alt fs-5"></i><small
                                            style="margin-left: 5px; font-size: 14px">Document</small>
                                        <div class="progress">
                                            <div class="progress-bar" aria-valuenow="50" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 50%">
                                                50%
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <small style="font-size: 14px">1.1GB</small>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="far fa-file-audio fs-5"></i><small
                                            style="margin-left: 5px; font-size: 14px">Audio</small>
                                        <div class="progress">
                                            <div class="progress-bar" aria-valuenow="50" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 50%">
                                                50%
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <small style="font-size: 14px">2.2GB</small>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="far fa-file-video fs-5"></i><small
                                            style="margin-left: 5px; font-size: 14px">Video</small>
                                        <div class="progress">
                                            <div class="progress-bar" aria-valuenow="50" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 50%">
                                                50%
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <small style="font-size: 14px">4.7GB</small>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="far fa-file fs-5"></i><small
                                            style="margin-left: 5px; font-size: 14px">Other
                                            files</small>
                                        <div class="progress">
                                            <div class="progress-bar" aria-valuenow="50" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 50%;">
                                                50%
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <small style="font-size: 14px">8.7GB</small>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="text-end">
                            <button class="btn btn-success btn-sm border rounded-pill" type="button"
                                style="width: 93.8438px">
                                <i class="far fa-edit" style="margin-right: 3px"></i>Edit</button><button
                                class="btn btn-primary btn-sm border rounded-pill" type="button"
                                style="margin-left: 10px">
                                <i class="far fa-arrow-alt-circle-up" style="margin-right: 3px"></i>Upload
                            </button>
                        </div>
                    </div>
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
                <h3 class="text-light">Recent</h3>
                @foreach (range(1, 6) as $item)
                    <div class="card mt-3">
                        <div class="card-body w-100 d-flex justify-content-between">
                            <div><i class="far fa-image fs-4 " style="color:rgb(43, 90, 209)"></i></div>
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
