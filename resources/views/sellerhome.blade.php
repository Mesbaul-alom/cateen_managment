@extends('layouts.master')

@section('content')
    <div class="pcoded-content">
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-6">
                    <div class="page-header-title">
                        <i class="feather icon-home bg-c-blue"></i>
                        <div class="d-inline">
                            <h3>Welcome to Ausbd Kitchen</h3>
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


                            <div class="col-md-12">
                                <div class="card table-card">
                                    <div class="card-header">
                                        <h5>Customer Overview</h5>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li class="first-opt"><i
                                                        class="feather icon-chevron-left open-card-option"></i>
                                                </li>
                                                <li><i class="feather icon-maximize full-card"></i>
                                                </li>
                                                <li><i class="feather icon-minus minimize-card"></i>
                                                </li>
                                                <li><i class="feather icon-refresh-cw reload-card"></i>
                                                </li>
                                                <li><i class="feather icon-trash close-card"></i>
                                                </li>
                                                <li><i class="feather icon-chevron-left open-card-option"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="table-responsive">
                                            <table class="table table-hover m-b-0">
                                                <thead>
                                                    <tr>
                                                        <th>Customer</th>
                                                        <th>Company</th>
                                                        <th>Lead Score</th>
                                                        <th>Date</th>
                                                        <th>Tags</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Pinterest</td>
                                                        <td>Pinterest</td>
                                                        <td>223</td>
                                                        <td>19-11-2018</td>
                                                        <td>
                                                            <label class="badge badge-inverse-primary">Sketch</label>
                                                            <label class="badge badge-inverse-primary">Ui</label>
                                                        </td>
                                                        <td>
                                                            <a href="#!"><i
                                                                    class="icon feather icon-eye f-w-600 f-16 m-r-15 text-c-green"></i></a>
                                                            <a href="#!"><i
                                                                    class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a>
                                                            <a href="#!"><i
                                                                    class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
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
