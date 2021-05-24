@extends('layouts.dashBoard')

@section('title', 'Statistiche')

@section('content')

    <div class="col-lg-10 chart">
      <div class="row">
        <div class="col-sm-12">
          <h4 class='mb-4' style="color:#32c69a">Statistiche</h4>
        </div>
        <!-- Statistiche messaggi per anno  -->
        <div class="col-lg-6 mb-5">
          <canvas id="myChart1" style="height:750px; width:80vw"></canvas>
        </div>

        <!-- Statistiche messaggi per mese  -->
        <div class="col-lg-6 mb-5">
          <canvas id="myChart2" style="height:750px; width:80vw"></canvas>
        </div>

        <!-- Statistiche recensioni per anno  -->
        <div class="col-lg-6 mb-5">
          <canvas id="myChart3"  style="height:750px; width:80vw"></canvas>
        </div>


        <!-- Statistiche recensioni per mese  -->
        <div class="col-lg-6 chart mb-5">
          <canvas id="myChart4"  style="height:750px; width:80vw"></canvas>
        </div>

        <!-- Media voto per mese  -->
        <div class="col-lg-6 chart mb-5">
          <canvas id="myChart5" style="height:750px; width:80vw"></canvas>
        </div>

        <!-- Media voto per anno  -->
        <div class="col-lg-6 chart mb-5">
          <canvas id="myChart6" style="height:750px; width:80vw"></canvas>
        </div>

      </div>
    </div>
  </div>


  <script>


  // CHART 1
  let chart1 = new Chart(myChart1, {
    type: 'bar',
    data: {
      datasets: [{
        data: <?php echo json_encode($messagesForYear); ?>,
        backgroundColor: <?php echo json_encode($backgroundColorYear); ?>,
        borderColor: <?php echo json_encode($borderColorYear); ?>,
        borderWidth: 2
      }]
    },
    options: {
      plugins: {
        title: {
          text: "N. messaggi ricevuti per anno",
          display: true,
          font: {size: 16}
        },
        legend: {
          display: 0
        }
      }
    }
  });

  // CHART 2
  let chart2 = new Chart(myChart2, {
    type: 'line',
    data: {
      datasets: [{
        data: <?php echo json_encode($messagesForMonth); ?>,
        backgroundColor: <?php echo json_encode($backgroundColorMonth); ?>,
        borderColor: '#32c69a',
        tension: 0.1,
        borderWidth: 3
      }]
    },
    options: {
      plugins: {
        title: {
          text: "2021 - N. messaggi ricevuti per mese",
          display: true,
          font: {size: 16}
        },
        legend: {
          display: 0
        }
      },
      scales: {
        y: {
          beginAtZero: true,
          ticks: {
          // forces step size to be 50 units
          stepSize: 1
          }
        }
      }
    }
  });

  // CHART 3
  let chart3 = new Chart(myChart3, {
    type: 'bar',
    data: {
      datasets: [{
        data: <?php echo json_encode($reviewsForYear); ?>,
        backgroundColor: <?php echo json_encode($backgroundColorYear); ?>,
        borderColor: <?php echo json_encode($borderColorYear); ?>,
        borderWidth: 2
      }]
    },
    options: {
      plugins: {
        title: {
          text: "N. recensioni ricevute per anno",
          display: true,
          font: {size: 16}
        },
        legend: {
          display: 0
        }
      }
    }
  });

  // CHART 4
  let chart4 = new Chart(myChart4, {
    type: 'line',
    data: {
      labels: <?php echo json_encode($month); ?>,
      datasets: [{
        data: <?php echo json_encode($reviewsForMonth); ?>,
        backgroundColor: <?php echo json_encode($backgroundColorMonth); ?>,
        borderColor: '#32c69a',
        tension: 0.1,
        borderWidth: 3
      }]
    },
    options: {
      plugins: {
        title: {
          text: "2021 - N. recensioni ricevute per mese",
          display: true,
          font: {size: 16}
        },
        legend: {
          display: 0
        }
      },
      scales: {
        y: {
          beginAtZero: true,
          ticks: {
          // forces step size to be 50 units
          stepSize: 1
          }
        }
      }
    }
  });

  // CHART 5
  let chart5 = new Chart(myChart5, {
    type: 'bar',
    data: {
      labels: <?php echo json_encode($year); ?>,
      datasets: [{
        data: <?php echo json_encode($votesForYear); ?>,
        backgroundColor: <?php echo json_encode($backgroundColorYear); ?>,
        borderColor: <?php echo json_encode($borderColorYear); ?>,
        borderWidth: 2
      }]
    },
    options: {
      plugins: {
        title: {
          text: "Media voto per anno",
          display: true,
          font: {size: 16}
        },
        legend: {
          display: 0
        }
      }
    }
  });

  // CHART 6
  let chart6 = new Chart(myChart6, {
    type: 'bar',
    data: {
      labels: <?php echo json_encode($month); ?>,
      datasets: [{
        data: <?php echo json_encode($votesForMonth); ?>,
        backgroundColor: <?php echo json_encode($backgroundColorMonth); ?>,
        borderColor: <?php echo json_encode($borderColorMonth); ?>,
        borderWidth: 2
      }]
    },
    options: {
      plugins: {
        title: {
          text: "2021 - Media voto per mese",
          display: true,
          font: {size: 16}
        },
        legend: {
          display: 0
        }
      }
    }
  });


  </script>

@endsection
