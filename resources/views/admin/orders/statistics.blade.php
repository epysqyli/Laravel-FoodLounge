@extends('layouts.app')

{{-- @dd($test); --}}

@section('content')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <div class="container">
        <div>
            <canvas id="ordersPerMonth"></canvas>
        </div>
    </div>

    <script>
        const labels = [
            'Month 1',
            'Month 2',
            'Month 3',
            'Month 4',
            'Month 5',
            'Month 6',
        ];

        const data = {
            labels: labels,
            datasets: [{
                label: 'Numero Ordini',
                yAxisID: 'orders',
                data: {{ json_encode($test) }},
                fill: {
                    target: 'origin',
                    above: 'rgba(255, 0, 0, 0.25)',
                    below: 'rgba(0, 0, 255, 0.25)'
                },
                tension: 0.5,
            }, {
                label: 'Fatturato',
                yAxisID: 'revenue',
                data: [3000, 2000, 9000, 4500, 5550, 6250],
                fill: {
                    target: 'origin',
                    above: 'rgba(0, 0, 255, 0.25)',
                    below: 'rgba(255, 0, 0, 0.25)',
                },
                tension: 0.5
            }]
        };

        const config = {
            type: 'line',
            data: data,
            options: {
                scales: {
                    orders: {
                        type: 'linear',
                        position: 'left',
                    },
                    revenue: {
                        type: 'linear',
                        position: 'right',
                        ticks: {
                            max: 1,
                            min: 0
                        }
                    }
                }
            }
        };

        var myChart = new Chart(
            document.getElementById('ordersPerMonth'),
            config
        );
    </script>
@endsection
