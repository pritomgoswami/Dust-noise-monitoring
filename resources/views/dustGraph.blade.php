

 <title>DustGraph</title>
@extends('layouts.nav')
@section('content')
    <html>
<head>
     <meta http-equiv="refresh" content="30"> 
    <title>Sound</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>

{{--<h2 style="margin:50px 0px 0px 130px;">Dust and noise monitoring system</h2>--}}
<div id="mychart" style="width: 1500px; height: 500px;padding-top:50px" class="">
    <script type="text/javascript">

var button = document.getElementById('b1');
        var dusts1 = <?php echo $dusts1; ?>;
       
        console.log(dusts1);
       
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart1);
        function drawChart1() {
            var data1 = google.visualization.arrayToDataTable(dusts1);
            var options1 = {
                title: 'Dust Readings',
                hAxis:{title:'Date'
                },
                vAxis:{title:'Density(µg/m3)',
                },


                curveType: 'function',
                series:{
                    0:{color:'#0000FF'}
                }
               
            };

            var chart1 = new google.visualization.LineChart(document.getElementById('mychart'));
            chart1.draw(data1, options1);}
  
    </script>


</div>

<!-- 2nd -->

<div id="mychart2" style="width: 1500px; height: 500px;padding-top:50px"  class="">
    <script type="text/javascript">

        var dusts2 = <?php echo $dusts2; ?>;
        console.log(dusts2);
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable(dusts2);
            var options = {
                title: 'Dust Readings',
                
                hAxis:{title:'Date'
                },
                vAxis:{title:'Density(µg/m3)'},

                curveType: 'function',
                series:{
                    0:{color:'#00FF00'}
                }
              
            };
            var chart = new google.visualization.LineChart(document.getElementById('mychart2'));
            chart.draw(data, options);
        }
    </script>
</div>

<!-- 3rd -->

<div id="mychart3" style="width: 1500px; height: 500px;padding-top:50px"  class="col-sm-12">
    <script type="text/javascript">

        var dusts3 = <?php echo $dusts3; ?>;
        console.log(dusts3);
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable(dusts3);
            var options = {
                title: 'Dust Readings',
                
                hAxis:{title:'Date'
                },
                vAxis:{title:'Density(µg/m3)'},

                curveType: 'function',
               
               
                series:{
                    0:{color:'#FF00FF'}
                }
              
            };
            var chart = new google.visualization.LineChart(document.getElementById('mychart3'));
            chart.draw(data, options);
        }
    </script>
</div>


<!-- 4th -->


<div id="mychart4" style="width: 1500px; height: 500px;padding-top:50px"  class="">
    <script type="text/javascript">

        var dusts4 = <?php echo $dusts4; ?>;
        console.log(dusts4);
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable(dusts4);
            var options = {
                title: 'Dust Readings',
                
                hAxis:{title:'Date'
                },
                vAxis:{title:'Density(µg/m3)'},

                curveType: 'function',
                series:{
                    0:{color:'#00FFFF'}
                }
            
            };
            var chart = new google.visualization.LineChart(document.getElementById('mychart4'));
            chart.draw(data, options);
        }
    </script>
</div>

</body>
</html>
    @endsection

