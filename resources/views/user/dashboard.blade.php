@extends('layouts.user')

@section('title', 'Home')



@section('content')
    <div class="col-md-10 p-4 rounded">
        <div class="container-fluid ">
            <div class="row w-100 h-10 rounded">
                <div class="d-flex justify-content-between">
                    <div class="input-group" style="width: 80%;">
                        <input type="text" class="form-control" placeholder="Search Here..." aria-label="Search">
                        <button class="btn btn-success" type="button">Search</button>
                    </div>
                    <a href="#" id="profile-icon" class="text-dark py-3 px-3 border border-success rounded-circle">
                        <i class="fa-solid fa-user fa-lg"></i>
                    </a>
                </div>
            </div>

            <div class="d-flex justify-content-between mt-5 mb-2">
                <p class="text-dark fs-6 mt-1 border rounded p-2 text-capitalize text-opacity-50 bg-dark bg-opacity-50">
                    <a href="#" class="text-decoration-none">
                        <i class="fa-solid fa-xmark text-danger"></i>
                    </a> ( 5 ) folder selected | total size 3GB
                </p>

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


            <div class="row">
                <div class="container" style="max-height: 410px; overflow:auto;">
                    <div class="row">
                        @foreach (range(1, 12) as $item)
                            <div class="col-md-3" style="margin-top: 10px;">
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
                                            <i class="fas fa-folder"
                                                style="font-size: 100px; color:rgb(246,187,69)"></i>
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
                    </div>
                </div>


                <div class="d-flex align-items-center mt-2">
                    <div class=" d-flex">
                        <div style="width:30vh; height:30vh;">
                            <canvas id="pieChart"></canvas>
                        </div>
                    </div>
                    <div class="mt-1 flex-shrink-1 flex-grow-1 overflow-scroll" style="height: 22rem;">
                        @foreach (range(1, 11) as $item)
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
