@extends('layouts.master')

@section('content')
    <div class="pcoded-content">
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-6">
                    <div class="page-header-title">
                        <i class="feather icon-home bg-c-blue"></i>
                        <div class="d-inline">
                            <h3>Day</h3>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-body">
                        <div class="row">

                            <div class="col-md-7">
                                <div class="card table-card">
                                    <div class="card-header">
                                        <h5>Day Table</h5>

                                    </div>
                                    <div class="card-block">
                                        <div class="table-responsive">
                                            <table class="table table-hover m-b-0">
                                                <thead>
                                                    <tr>
                                                        <th>SL</th>
                                                        <th>Name</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($days as $sl => $day)
                                                        <tr>
                                                            <td>{{ $sl + 1 }}</td>
                                                            <td>{{ $day->day }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-5">
                                <div class="card table-card">
                                    <div class="card-header">
                                        <h5>Day Form</h5>
                                    </div>
                                    <div class="card-block">
                                        <form action="{{ route('day.store') }}" method="post">
                                            @csrf
                                            <div class="my-3 mx-3">
                                                <label class="form-label" for="">Day</label>
                                                <input type="text" name="day" class="form-control"
                                                    placeholder="Name">
                                            </div>
                                            <div class="my-3 mx-3">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
