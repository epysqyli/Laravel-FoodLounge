@extends('layouts.app')

@section('content')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <div class="container">
        <h1 class="text-center mt-2 mb-4">Statistiche Ordini - Ultimi 3 mesi</h1>
        <div>
            <canvas id="chart"></canvas>
        </div>
        <div class="row mt-5">
            <div class="col-12 col-md-4 offset-md-8">
                <a href="{{ url()->previous() }}" class="d-block btn btn-secondary text-white">
                    <span>Torna indietro</span>
                </a>
            </div>
        </div>
    </div>

    <script>
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
            labels,
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
                pointBackgroundColor: 'crimson',
                pointRadius: 5,
                pointHoverRadius: 8,
                pointHoverBorderColor: 'black',
                tension: 0.5,
            }, {
                label: 'Fatturato',
                yAxisID: 'revenue',
                data: {{ json_encode($monthlyRevenue) }},
                fill: true,
                derColor: 'cornflowerblue',
                pointBackgroundColor: 'cornflowerblue',
                pointRadius: 5,
                pointHoverRadius: 8,
                pointHoverBorderColor: 'black',
                tension: 0.5
            }]
        };

        const config = {
            type: 'line',
            data,
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
                            callback: function(value, index, values) {
                                return value + ' €';
                            }
                        }
                    }
                }
            }
        };

        const myChart = new Chart(
            document.getElementById('chart'),
            config
        );
    </script>
@endsection
