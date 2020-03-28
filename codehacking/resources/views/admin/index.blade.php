@extends('layouts.admin')


@section('content')

<h1>Admin</h1>

<canvas id="myChart"></canvas>

<hr>

@stop

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js" integrity="sha256-CfcERD4Ov4+lKbWbYqXD6aFM9M51gN4GUEtDhkWABMo=" crossorigin="anonymous"></script>

    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'bar',

            // The data for our dataset
            data: {
                labels: ['Posts', 'Categories', 'Comments'],
                datasets: [{
                    label: 'Data of CMS',
                    backgroundColor: [
                        'rgb(255, 99, 132, 0.2)',
                        'rgb(54, 162, 235, 0.2)',
                        'rgb(255, 206, 86, 0.2)'
                    ],
                    borderColor: 'rgb(255, 99, 132)',
                    data: [{{ $postCount }}, {{ $categoriesCount }}, {{ $commentsCount }}]
                }]
            },

            // Configuration options go here
            options: {}
        });
    </script>
@stop