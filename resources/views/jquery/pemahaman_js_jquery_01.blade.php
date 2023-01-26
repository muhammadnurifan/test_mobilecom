@extends('layouts.master')
@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Pemahaman-js-jquery-01</h1>
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
                    <div class="card-body">
                        <p id="demo"></p>
                        <br>
                        <p><i>Untuk melihat jawaban soal pemahaman_js_jquery_01 silahkan lihat console</i></p>
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
        var names = ["Andi", {"Name": "Gunawan", "Address": "Jl. kemerdekaan 01"}, "Budi"];
        console.log(names[1]);
        $("#demo").html(names[1]['Name']);
    });
</script>
@stop

