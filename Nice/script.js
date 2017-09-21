function chartdisplay( param1, param2, param3,canvasid){
var ctx = document.getElementById(canvasid).getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Passed", "Failed", "Skipped"],
        datasets: [{
            label: 'Test Pass Coverage',
            data: [param1, param2, param3],
            backgroundColor: [
                'rgba(75, 192, 192, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 206, 86, 0.2)',

            ],
            borderColor: [
                'rgba(75, 192, 192, 1)',
                'rgba(255,99,132,1)',
                'rgba(255, 206, 86, 1)',
               
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
}