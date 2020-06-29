export function doughnut () {
    var ctx = document.getElementById('chart').getContext('2d');
    if (ctx) {
        var chart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: [],
                datasets: [{
                    label: '',
                    data: [32, 19, 8],
                    backgroundColor: [
                        '#34569e',
                        '#ffda83',
                        '#ff8373',
                    ],
                    borderColor: [],
                    borderWidth: 0
                }]
            },
            options: {
                cutoutPercentage: 55,
                scales: {
                    // yAxes: [{
                    //     ticks: {
                    //         beginAtZero: true
                    //     }
                    // }]
                }
            }
        });
    }
}

export default {
    doughnut
}