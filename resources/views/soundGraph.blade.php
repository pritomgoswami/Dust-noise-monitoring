<title>SoundGraph</title>
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
<div id="mychart" style="width: 1500px; height: 500px;padding-top:50px">
    <script type="text/javascript">

var button = document.getElementById('b1');
        var sounds1 = <?php echo $sounds1; ?>;
       
        console.log(sounds1);
       
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart1);
        function drawChart1() {
            var data1 = google.visualization.arrayToDataTable(sounds1);
            var options1 = {
                title: 'Sound Readings',
                hAxis:{title:'Date'
                },
                vAxis:{title:'Intensity(dB)',
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

        var sounds2 = <?php echo $sounds2; ?>;
        console.log(sounds2);
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable(sounds2);
            var options = {
                title: 'Sound Readings',
                
                hAxis:{title:'Date'
                },
                vAxis:{title:'Intensity(dB)'},

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

        var sounds3 = <?php echo $sounds3; ?>;
        console.log(sounds3);
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable(sounds3);
            var options = {
                title: 'Sound Readings',
                
                hAxis:{title:'Date'
                },
                vAxis:{title:'Intensity(dB)'},

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

        var sounds4 = <?php echo $sounds4; ?>;
        console.log(sounds4);
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable(sounds4);
            var options = {
                title: 'Sound Readings',
                
                hAxis:{title:'Date'
                },
                vAxis:{title:'Intensity(dB)'},

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

