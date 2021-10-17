@extends('layouts.app')

@section('content')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <div class="container">
        <h1 class="text-center mb-4">Statistiche Ordini - Ultimi 3 mesi</h1>
        <div>
            <canvas id="chart"></canvas>
        </div>
    </div>

    <script>
        // months should be the actual last 3
        const months = {
            1: 'Gennaio',
            2: 'Febbraio',
            3: 'Marzo',
            4: 'Aprile',
            5: 'Maggio',
            6: 'Giugno',
            7: 'Luglio',
            8: 'Agosto',
            9: 'Settembre',
            10: 'Ottobre',
            11: 'Novembre',
            12: 'Dicembre',
        }

        const labels = [
            months[{{ json_encode($months) }}[0]],
            months[{{ json_encode($months) }}[1]],
            months[{{ json_encode($months) }}[2]],
        ];

        const data = {
            labels: labels,
            datasets: [{
                label: 'Numero Ordini',
                yAxisID: 'orders',
                data: {{ json_encode($ordersCount) }},
                fill: {
                    target: '1',
                    above: 'rgba(150, 150, 0, 0.25)',
                    below: 'rgba(0, 150, 150, 0.25)'
                },
                borderColor: 'crimson',
                tension: 0.5,
            }, {
                label: 'Fatturato - EUR',
                yAxisID: 'revenue',
                data: {{ json_encode($monthlyRevenue) }},
                fill: true,
                borderColor: 'cornflowerblue',
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
                    }
                }
            }
        };

        var myChart = new Chart(
            document.getElementById('chart'),
            config
        );
    </script>
@endsection
