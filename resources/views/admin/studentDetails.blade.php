@extends('layouts.admin')
@section('content')
<div class="container-fluid py-4">
    <div class=" card-body">
        <h1 class=" text-center" >Student Details</h1>
      <div class="d-flex justify-content-center">
        <table class= "table table-striped" >
                <tbody>
                  <tr>
                    <th scope="row">Details</th>
                    <th scope="row">Data</th>
                  </tr>
                  <tr>
                    <td>First Name</td>
                    <td>{{$student->firstname}}</td>
                  </tr>
                  <tr>
                    <td>Last Name</td>
                    <td>{{$student->lastname}}</td>
                  </tr>
                  <tr>
                    <td>Gender</td>
                    <td>{{$student->gender}}</td>
                  </tr>
                  <tr>
                    <td>Language</td>
                    <td>{{$student->language}}</td>
                  </tr>
                  <tr>
                    <td>Phone Number</td>
                    <td>{{$student->number}}</td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td>{{$student->email}}</td>
                  </tr>
                  <tr>
                    <td>DOB</td>
                    <td>{{$student->dob}}</td>
                  </tr>
                  <tr>
                    <td>Country</td>
                    <td>{{$student->country}}</td>
                  </tr>
                  <tr>
                    <td>Quran Level</td>
                    <td>{{$student->quran_level}}</td>
                  </tr>
                  <tr>
                    <td>Days Preffered</td>
                    <td>{{$student->preffered_days}}</td>
                  </tr>
                  <tr>
                    <td>Nok name</td>
                    <td>{{$student->nok_name}}</td>
                  </tr>
                  <tr>
                    <td>Nok email</td>
                    <td>{{$student->nok_email}}</td>
                  </tr>
                  <tr>
                    <td>Nok Phone Number</td>
                    <td>{{$student->nok_number}}</td>
                  </tr>
                  <tr>
                    <td>Nok relationship</td>
                    <td>{{$student->nok_relationship}}</td>
                  </tr>
                  <tr>
                    <td>paid</td>
                    @if ($student->paid == 1)
                        <td>Yes</td>
                    @else
                    <td>No</td>
                    @endif
                  </tr>
                  <tr>
                    <td>Action</td>
                    <td> <form action="{{route('student.destroy',$student->id)}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form></td>

                  </tr>
                </tbody>
              </table>

      </div>
    </div>

</div>
@endsection
@section('scripts')
<script>
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["M", "T", "W", "T", "F", "S", "S"],
        datasets: [{
          label: "Sales",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "rgba(255, 255, 255, .8)",
          data: [50, 20, 10, 22, 50, 10, 40],
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
              color: "#fff"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });

    var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

    new Chart(ctx3, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#f8f9fa',
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
</script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
  <!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/material-dashboard.min.js?v=3.0.0"></script>
@endsection
