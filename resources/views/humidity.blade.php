<title>Humidity values</title>
<meta http-equiv="refresh" content="30">
@extends('layouts.nav')

@section('styles')
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
@endsection

@section('content')
    <div class="container " style="padding-top: 100px;text-align: center">
{{--        <div class="row">--}}
{{--            <div class="col-md-8 col-md-offset-2">--}}
{{--                <div class="panel panel-default">--}}
{{--                    <div class="panel-heading">Humidity Values</div>--}}

{{--                    <div class="panel-body">--}}
                        <table class="table table-bordered table-striped" id="datatable">
                            <thead class="bg-info">
                            <tr class="text-center">
                                <th>Humidity_Id</th>
                                <th>Humidity readings(%)</th>
                                <th>Time</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($datas as $data)
                                <tr class="text-center">
                                    <td>{{ $data->node_id }}</td>
                                    <td>{{ $data->hums }}</td>
                                    <td>{{ $data->created_at }}</td>
                                </tr>
                            @endforeach
                            </tbody>

                            <tfoot>
            <tr>
                <th>Node_id</th>
                <th>Readings</th>
                <th>Time</th>
                
            </tr>
        </tfoot>
                        </table>
                    </div>
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection

@section('javascripts')
    <script src="code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script>
        // $(document).ready( function () {
        //     $('#datatable').DataTable(
        //         {"order":[[2,"desc"]]}
        //     );
        // });

        $(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#datatable tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
    } );
 
    // DataTable
    var table = $('#datatable').DataTable({

        "order":[[2,"desc"]],

        stateSave:true,
         stateDuration:60*60*24,
        initComplete: function () {
            // Apply the search
            this.api().columns().every( function () {
                var that = this;
 
                $( 'input', this.footer() ).on( 'keyup change clear', function () {
                    if ( that.search() !== this.value ) {
                        that
                            .search( this.value )
                            .draw();
                    }
                } );
            } );
        }
    });
 
} );
    </script>
@endsection

