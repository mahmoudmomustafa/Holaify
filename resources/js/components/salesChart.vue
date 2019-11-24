<template>
  <div class="chart-container">
    <canvas id="sales"></canvas>
  </div>
</template>

<script>
export default {
  name:"sales-chart",
  mounted(){
    let sales = document.getElementById('sales');
    new Chart(sales, {
        type: 'line',
        data: {
            labels: ['May', 'June', 'July','Augest','Sept'],
            datasets: [{
                data: [12, 5, 13,10,0,5]
            }]
        },
        options: {
            legend: {
                display: false,
            },scales: {
            yAxes: [{
                stacked: true
            }]
        }
        }
    });
  }
};
</script>
