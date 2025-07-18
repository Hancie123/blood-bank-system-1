<script>
    var dynamicChartData = @json($chartData);
</script>

@if ($bloodDonorCount)
    <script>
        if ($('#s-col').length > 0) {
            var formattedData = dynamicChartData.map(function(item) {
                return {
                    x: item.x,
                    y: item.y,
                    fillColor: item.y >= 25 ? '#FF955A' : '#2E37A4'
                };
            });

            var sCol = {
                chart: {
                    width: 80,
                    height: 54,
                    type: 'bar',
                    toolbar: { show: false },
                    sparkline: { enabled: true }
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '70%',
                        borderRadius: 3,
                        endingShape: 'rounded'
                    }
                },
                dataLabels: { enabled: false },
                stroke: { show: false },
                series: [{
                    name: 'Donors',
                    data: formattedData
                }],
                xaxis: {
                    labels: { show: false },
                    axisTicks: { show: false },
                    axisBorder: { show: false }
                },
                yaxis: { show: false },
                grid: { show: false },
                tooltip: { enabled: false }
            };

            var chart = new ApexCharts(document.querySelector("#s-col"), sCol);
            chart.render();
        }
    </script>
@endif


<script>
    var requestChartData = @json($requestChartData); // [12, 4, 0, 2, ...]
</script>


<script>
    if ($('#s-col-2').length > 0) {
    var sCol2 = {
        chart: {
            width: 100,
            height: 54,
            type: 'area',
            toolbar: { show: false },
            sparkline: { enabled: true }
        },
        stroke: {
            curve: 'smooth',
            width: 1,
            colors: ['#F36C3D']
        },
        fill: {
            type: 'gradient',
            gradient: {
                shadeIntensity: 1,
                opacityFrom: 0.4,
                opacityTo: 0,
                stops: [0, 90, 100],
                colorStops: [
                    {
                        offset: 0,
                        color: "#F36C3D",
                        opacity: 0.4
                    },
                    {
                        offset: 100,
                        color: "#ffffff",
                        opacity: 0.8
                    }
                ]
            }
        },
        dataLabels: { enabled: false },
        series: [{
            name: 'Requests',
            data: requestChartData // Dynamic data from backend
        }],
        xaxis: {
            labels: { show: false },
            axisTicks: { show: false },
            axisBorder: { show: false }
        },
        yaxis: { show: false },
        grid: { show: false },
        tooltip: { enabled: false }
    };

    var chart2 = new ApexCharts(document.querySelector("#s-col-2"), sCol2);
    chart2.render();
}

</script>

<script>
    var contactChartData = @json($contactChartData);
</script>


<script>
    console.log("Contact chart data:", @json($contactChartData));
</script>


<script>
    if ($('#s-col-3').length > 0 && typeof contactChartData !== 'undefined') {
        var sCol3 = {
            chart: {
                width: 80,
                height: 54,
                type: 'bar',
                toolbar: { show: false },
                sparkline: { enabled: true }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '70%',
                    borderRadius: 0,
                    endingShape: 'rounded'
                }
            },
            dataLabels: { enabled: false },
            stroke: { show: false },
            series: [{
                name: 'Contacts',
                data: contactChartData
            }],
            xaxis: {
                labels: { show: false },
                axisTicks: { show: false },
                axisBorder: { show: false }
            },
            yaxis: { show: false },
            grid: { show: false },
            tooltip: { enabled: false }
        };

        var chart3 = new ApexCharts(document.querySelector("#s-col-3"), sCol3);
        chart3.render();
    }
</script>


<script>
  const chartCategories = @json($monthlyDonorChartData['categories']);
  const chartSeries = @json($monthlyDonorChartData['series']);

  if ($('#s-col-19').length > 0) {
    var sCol = {
      chart: {
        type: 'bar',
        height: 250,
        toolbar: { show: false },
        sparkline: { enabled: false }
      },
      plotOptions: {
        bar: {
          horizontal: false,
          columnWidth: '25%',
          borderRadius: 3
        }
      },
      dataLabels: { enabled: false },
      stroke: {
        show: true,
        width: 0,
        colors: ['#fff']
      },
      series: [{
        name: 'Donors',
        data: chartSeries
      }],
      colors: ['#1E90FF'],
      xaxis: {
        categories: chartCategories,
        labels: { style: { fontSize: '14px' } },
        axisBorder: { show: false },
        axisTicks: { show: false },
        tickPlacement: 'between'
      },
      yaxis: {
        labels: {
          style: { fontSize: '14px' },
          offsetX: -10
        }
      },
      legend: { show: false },
      grid: {
        show: true,
        strokeDashArray: 4,
        padding: {
          left: 0,
          right: -10
        }
      },
      tooltip: { enabled: true }
    };

    var chart = new ApexCharts(document.querySelector("#s-col-19"), sCol);
    chart.render();
  }
</script>



<script>
  const chartCategories2 = @json($monthlyRequestChartData['categories']);
  const chartSeries2 = @json($monthlyRequestChartData['series']);

  if ($('#s-col-720').length > 0) {
    var sCol = {
      chart: {
        type: 'bar',
        height: 250,
        toolbar: { show: false },
        sparkline: { enabled: false }
      },
      plotOptions: {
        bar: {
          horizontal: false,
          columnWidth: '25%',
          borderRadius: 3
        }
      },
      dataLabels: { enabled: false },
      stroke: {
        show: true,
        width: 0,
        colors: ['#fff']
      },
      series: [{
        name: 'Blood Requesters',
        data: chartSeries2
      }],
      colors: ['#ff0000'],
      xaxis: {
        categories: chartCategories2,
        labels: { style: { fontSize: '14px' } },
        axisBorder: { show: false },
        axisTicks: { show: false },
        tickPlacement: 'between'
      },
      yaxis: {
        labels: {
          style: { fontSize: '14px' },
          offsetX: -10
        }
      },
      legend: { show: false },
      grid: {
        show: true,
        strokeDashArray: 4,
        padding: {
          left: 0,
          right: -10
        }
      },
      tooltip: { enabled: true }
    };

    var chart = new ApexCharts(document.querySelector("#s-col-720"), sCol);
    chart.render();
  }
</script>

