<template>
  <div class="chart-container">
    <canvas id="orders"></canvas>
  </div>
</template>

<script>
export default {
  name:"order-chart",
  mounted(){
    let orders = document.getElementById('orders');
    new Chart(orders, {
        type: 'doughnut',
        data: {
            labels: ['Pending', 'Canceled', 'Deliverd'],
            datasets: [{
                data: [12, 5, 13],
                backgroundColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    '#3F51B5',
                ],
                borderWidth: 0
            }]
        },
        options: {
            legend: {
                display: false,
            }
        }
    });
  }
};
</script>
