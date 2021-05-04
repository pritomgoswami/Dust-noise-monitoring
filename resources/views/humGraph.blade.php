<title>HumGraph</title>
@extends('layouts.nav')
@section('content')
    <html>
<head>
     <meta http-equiv="refresh" content="30"> 
    <title>Humidity</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>

{{--<h2 style="margin:50px 0px 0px 130px;">Dust and noise monitoring system</h2>--}}
<div id="mychart" style="width: 1500px; height: 500px;padding-top:50px">
    <script type="text/javascript">

var button = document.getElementById('b1');
        var hums1 = <?php echo $hums1; ?>;
       
        console.log(hums1);
       
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart1);
        function drawChart1() {
            var data1 = google.visualization.arrayToDataTable(hums1);
            var options1 = {
                title: 'Humidity',
                hAxis:{title:'Date'
                },
                vAxis:{title:'Humidity(%)',
                },

                animation:{
                    duration:1000,
                    easing:'out',
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

<div id="mychart2" style="width: 1500px; height: 500px;padding-top:50px">
    <script type="text/javascript">

        var hums2 = <?php echo $hums2; ?>;
        console.log(hums2);
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable(hums2);
            var options = {
                title: 'Humidity',
                
                hAxis:{title:'Date'
                },
                vAxis:{title:'Humidity(%)'},

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

<div id="mychart3" style="width: 1500px; height: 500px;padding-top:50px">
    <script type="text/javascript">

        var hums3 = <?php echo $hums3; ?>;
        console.log(hums3);
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable(hums3);
            var options = {
                title: 'Humidity',
                
                hAxis:{title:'Date'
                },
                vAxis:{title:'Humidity(%)'},

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


<div id="mychart4" style="width: 1500px; height: 500px;padding-top:50px">
    <script type="text/javascript">

        var hums4 = <?php echo $hums4; ?>;
        console.log(hums4);
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable(hums4);
            var options = {
                title: 'Humidity',
                
                hAxis:{title:'Date'
                },
                vAxis:{title:'Humidity(%)'},

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

