@extends('layouts.master')
@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Pemahaman-js-jquery-02</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body" id="spinner">
                    <a type="button" class="btn btn-info btn-sm" href="javascript:;" id="getdata" >Get Data</a>
                        <p id="school_name"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('footer')
<script>
    $(document).ready(function(){
        $("#getdata").click(function() { 
            var spinner = '<div class="spinner-border" role="status" style="width: 50px; height: 50px;"><span class="sr-only">Loading...</span></div>';
            $("#spinner").html(spinner);
            $.ajax({
                url: "/getInauguratedSchool",
                type: "GET",
                success: function (data) {
                    setTimeout(function() {
                        $('#spinner').text('Data retrieved successfully, see the data on the console menu');
                    }, 2000);
                }
            });
        });
    });
</script>
@stop

