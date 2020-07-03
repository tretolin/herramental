export function doughnut () {
    var el = document.getElementById('chart');
    if (el) {
        var ctx = el.getContext('2d');
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
                },
                events: ['hover']
            }
        });

        // Texto interior
        Chart.pluginService.register({
            beforeDraw: function(chart) {
                var width = chart.chart.width,
                    height = chart.chart.height,
                    ctx = chart.chart.ctx;
    
                ctx.restore();
                var fontSize = (height / 184).toFixed(2);
                ctx.font = fontSize + "em sans-serif";
                ctx.textBaseline = "middle";
                ctx.fillStyle = '#34569e';
    
                var text = "$1,605.00",
                    textX = Math.round((width - ctx.measureText(text).width) / 2),
                    textY = height / 2;
    
                ctx.fillText(text, textX, textY);
    
                var fontSize = (height / 224).toFixed(2);
                ctx.font = fontSize + "em sans-serif";
    
                var text = "Total",
                textX = Math.round((width - ctx.measureText(text).width) / 2),
                textY = height / 1.7;
    
                ctx.fillText(text, textX, textY);
    
                ctx.save();
            }
            });
        }
    }



export default {
    doughnut
}