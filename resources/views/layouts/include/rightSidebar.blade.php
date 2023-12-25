<div class="right-sidebar" style="margin-top: 80px; margin-right: 10px;">
    {{-- pieChart here --}}
    <canvas id="pieChart"></canvas>
    <div class="table text-start">
        <div class="table-responsive text-start">
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <td>
                            <i class="far fa-image fs-4"></i><small
                                style="margin-left: 5px; font-size: 14px">Image</small>
                            <div class="progress">
                                <div class="progress-bar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                    style="width: 50%">
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
                            <i class="far fa-file-alt fs-4"></i><small
                                style="margin-left: 5px; font-size: 14px">Document</small>
                            <div class="progress">
                                <div class="progress-bar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                    style="width: 50%">
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
                            <i class="far fa-file-audio fs-4"></i><small
                                style="margin-left: 5px; font-size: 14px">Audio</small>
                            <div class="progress">
                                <div class="progress-bar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                    style="width: 50%">
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
                            <i class="far fa-file-video fs-4"></i><small
                                style="margin-left: 5px; font-size: 14px">Video</small>
                            <div class="progress">
                                <div class="progress-bar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                    style="width: 50%">
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
                            <i class="far fa-file fs-4"></i><small style="margin-left: 5px; font-size: 14px">Other
                                files</small>
                            <div class="progress">
                                <div class="progress-bar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                    style="width: 50%">
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
        </div>
    </div>
    <div class="text-center">
        <button class="btn btn-success btn-sm border rounded-pill" type="button" style="width: 93.8438px">
            <i class="far fa-edit" style="margin-right: 3px"></i>Edit</button><button
            class="btn btn-dark btn-sm border rounded-pill" type="button" style="margin-left: 10px">
            <i class="far fa-arrow-alt-circle-up" style="margin-right: 3px"></i>Upload
        </button>
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
