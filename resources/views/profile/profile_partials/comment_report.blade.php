<x-card.card>
    <div id="contribution_chart"></div>
  </x-card.card>

@push('script')



<script>

    var options = {
          series: [
          {
            name: "Comment",
            data: {{ $comment_array_values }}
          },
          {
            name: "Post",
            data: {{ $post_array_values }}
          },
          {
            name: "Vote",
            data: {{ $vote_array_values }}
          },
          {
            name: "Job",
            data: {{ $job_for_report }}
          },
          {
            name: "Job Applied",
            data: {{ $job_apply_for_report }}
          }
        ],
          chart: {
          height: 350,
          type: 'bar',
          foreColor: '#ccc',
          stacked: true,
          zoom: {
            enabled: true
          },

          toolbar: {
            show: false
          }
        },
        tooltip: {
            theme: 'dark'
        },
        colors: ['#77B6EA', '#545454','#000','#6befce', '#d6fcdf'],
        dataLabels: {
          enabled: true,
        },
        stroke: {
          curve: 'smooth'
        },
        title: {
          text: "{{ $user->name }}'s  Contribute Rate",
          align: 'left'
        },
        grid: {
          borderColor: "#535A6C",
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.5
          },
            padding: {
              right: 20
            }

        },
        markers: {
          size: 1
        },
        xaxis: {
          categories: {{ $days30 }},
          title: {
            text: 'Date'
          }
        },
        yaxis: {
          title: {
            text: 'Vote * Comment * Post'
          },
          //min: 5,
          //max: 40
        },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
          floating: true,
          offsetY: -25,
          offsetX: -5
        }
        };

        var chart = new ApexCharts(document.querySelector("#contribution_chart"), options);
        chart.render();
</script>
@endpush

