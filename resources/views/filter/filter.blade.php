@extends('layouts.master')
@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Pemahaman-orm-01</h1>
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
                    <div class="card-header">
                    <form action="/filter-post" method="post">
                    @csrf
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-3">
                                    <input type='date' name="start_date" class='form-control' autocomplete="off" placeholder="From Date" data-language='en' />
                                </div>
                                <div class="col-md-3">
                                    <input type='date' name="end_date" class='form-control' autocomplete="off" placeholder="To Date" data-language='en' />
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-primary">Filter</button> 
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>School Code</th>
                                    <th>School Name</th>
                                    <th>Inaugurated Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($schools as $school)
                                <tr>
                                    <td>{{$school->id}}</td>
                                    <td>{{$school->school_code}}</td>
                                    <td>{{$school->school_name}}</td>
                                    <td>{{$school->inaugurated_date}}</td>
                                </tr>
                                @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection