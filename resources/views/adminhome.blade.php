@extends('layouts.master')

@section('content')
    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">




            <div class="showChat_inner">
                <div class="media chat-inner-header">
                    <a class="back_chatBox">
                        <i class="feather icon-x"></i> Josephin Doe
                    </a>
                </div>
                <div class="main-friend-chat">
                    <div class="media chat-messages">
                        <a class="media-left photo-table" href="#!">
                            <img class="media-object img-radius img-radius m-t-5" src="../files/assets/images/avatar-2.jpg"
                                alt="Generic placeholder image">
                        </a>
                        <div class="media-body chat-menu-content">
                            <div class="">
                                <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?
                                </p>
                            </div>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                    <div class="media chat-messages">
                        <div class="media-body chat-menu-reply">
                            <div class="">
                                <p class="chat-cont">Ohh! very nice</p>
                            </div>
                            <p class="chat-time">8:22 a.m.</p>
                        </div>
                    </div>
                    <div class="media chat-messages">
                        <a class="media-left photo-table" href="#!">
                            <img class="media-object img-radius img-radius m-t-5" src="../files/assets/images/avatar-2.jpg"
                                alt="Generic placeholder image">
                        </a>
                        <div class="media-body chat-menu-content">
                            <div class="">
                                <p class="chat-cont">can you come with me?</p>
                            </div>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                </div>
                <div class="chat-reply-box">
                    <div class="right-icon-control">
                        <div class="input-group input-group-button">
                            <input type="text" class="form-control" placeholder="Write hear . . ">
                            <div class="input-group-append">
                                <button class="btn btn-primary waves-effect waves-light" type="button"><i
                                        class="feather icon-message-circle"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    <div class="pcoded-content">

                        <div class="page-header card">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="feather icon-home bg-c-blue"></i>
                                        <div class="d-inline">
                                            <h5>Dashboard Analytics</h5>
                                            <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="page-header-breadcrumb">
                                        <ul class=" breadcrumb breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="../index.html"><i class="feather icon-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Dashboard Analytics</a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">

                                        <div class="row">

                                            <div class="col-xl-8 col-md-12">
                                                <div class="card sale-card">
                                                    <div class="card-header">
                                                        <h5>Deals Analytics</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-sm-8">
                                                                <div id="allocation-map" class="chart-shadow"
                                                                    style="height:215px"></div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div id="allocation-chart" class="chart-shadow"
                                                                    style="height:215px"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-12">
                                                <div class="card prod-p-card card-red">
                                                    <div class="card-body">
                                                        <div class="row align-items-center m-b-30">
                                                            <div class="col">
                                                                <h6 class="m-b-5 text-white">Total Profit</h6>
                                                                <h3 class="m-b-0 f-w-700 text-white">$1,783</h3>
                                                            </div>
                                                            <div class="col-auto">
                                                                <i class="fas fa-money-bill-alt text-c-red f-18"></i>
                                                            </div>
                                                        </div>
                                                        <p class="m-b-0 text-white"><span
                                                                class="label label-danger m-r-10">+11%</span>From Previous
                                                            Month</p>
                                                    </div>
                                                </div>
                                                <div class="card prod-p-card card-blue">
                                                    <div class="card-body">
                                                        <div class="row align-items-center m-b-30">
                                                            <div class="col">
                                                                <h6 class="m-b-5 text-white">Total Orders</h6>
                                                                <h3 class="m-b-0 f-w-700 text-white">15,830</h3>
                                                            </div>
                                                            <div class="col-auto">
                                                                <i class="fas fa-database text-c-blue f-18"></i>
                                                            </div>
                                                        </div>
                                                        <p class="m-b-0 text-white"><span
                                                                class="label label-primary m-r-10">+12%</span>From
                                                            Previous Month</p>
                                                    </div>
                                                </div>

                                            </div>


                                            <div class="col-xl-12">
                                                <div class="card product-progress-card">
                                                    <div class="card-block">
                                                        <div class="row pp-main">
                                                            <div class="col-xl-3 col-md-6">
                                                                <div class="pp-cont">
                                                                    <div class="row align-items-center m-b-20">
                                                                        <div class="col-auto">
                                                                            <i class="fas fa-cube f-24 text-mute"></i>
                                                                        </div>
                                                                        <div class="col text-right">
                                                                            <h2 class="m-b-0 text-c-blue">2476</h2>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row align-items-center m-b-15">
                                                                        <div class="col-auto">
                                                                            <p class="m-b-0">Total Product</p>
                                                                        </div>
                                                                        <div class="col text-right">
                                                                            <p class="m-b-0 text-c-blue"><i
                                                                                    class="fas fa-long-arrow-alt-up m-r-10"></i>64%
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-c-blue"
                                                                            style="width:45%"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-md-6">
                                                                <div class="pp-cont">
                                                                    <div class="row align-items-center m-b-20">
                                                                        <div class="col-auto">
                                                                            <i class="fas fa-tag f-24 text-mute"></i>
                                                                        </div>
                                                                        <div class="col text-right">
                                                                            <h2 class="m-b-0 text-c-red">843</h2>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row align-items-center m-b-15">
                                                                        <div class="col-auto">
                                                                            <p class="m-b-0">New Orders</p>
                                                                        </div>
                                                                        <div class="col text-right">
                                                                            <p class="m-b-0 text-c-red"><i
                                                                                    class="fas fa-long-arrow-alt-down m-r-10"></i>34%
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-c-red"
                                                                            style="width:75%"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-md-6">
                                                                <div class="pp-cont">
                                                                    <div class="row align-items-center m-b-20">
                                                                        <div class="col-auto">
                                                                            <i class="fas fa-random f-24 text-mute"></i>
                                                                        </div>
                                                                        <div class="col text-right">
                                                                            <h2 class="m-b-0 text-c-yellow">63%</h2>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row align-items-center m-b-15">
                                                                        <div class="col-auto">
                                                                            <p class="m-b-0">Conversion Rate</p>
                                                                        </div>
                                                                        <div class="col text-right">
                                                                            <p class="m-b-0 text-c-yellow"><i
                                                                                    class="fas fa-long-arrow-alt-up m-r-10"></i>64%
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-c-yellow"
                                                                            style="width:65%"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-md-6">
                                                                <div class="pp-cont">
                                                                    <div class="row align-items-center m-b-20">
                                                                        <div class="col-auto">
                                                                            <i
                                                                                class="fas fa-dollar-sign f-24 text-mute"></i>
                                                                        </div>
                                                                        <div class="col text-right">
                                                                            <h2 class="m-b-0 text-c-green">41M</h2>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row align-items-center m-b-15">
                                                                        <div class="col-auto">
                                                                            <p class="m-b-0">Conversion Rate</p>
                                                                        </div>
                                                                        <div class="col text-right">
                                                                            <p class="m-b-0 text-c-green"><i
                                                                                    class="fas fa-long-arrow-alt-up m-r-10"></i>54%
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-c-green"
                                                                            style="width:35%"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-xl-8 col-md-12">
                                                <div class="card table-card">
                                                    <div class="card-header">
                                                        <h5>Application Sales</h5>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li class="first-opt"><i
                                                                        class="feather icon-chevron-left open-card-option"></i>
                                                                </li>
                                                                <li><i class="feather icon-maximize full-card"></i></li>
                                                                <li><i class="feather icon-minus minimize-card"></i></li>
                                                                <li><i class="feather icon-refresh-cw reload-card"></i>
                                                                </li>
                                                                <li><i class="feather icon-trash close-card"></i></li>
                                                                <li><i
                                                                        class="feather icon-chevron-left open-card-option"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover m-b-0  table-borderless">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Application</th>
                                                                        <th>Sales</th>
                                                                        <th>Change</th>
                                                                        <th>Avg Price</th>
                                                                        <th>Total</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-inline-block align-middle">
                                                                                <h6>Able Pro</h6>
                                                                                <p class="text-muted m-b-0">Powerful Admin
                                                                                    Theme</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>16,300</td>
                                                                        <td>
                                                                            <div id="app-sale1" style="height:50px">
                                                                            </div>
                                                                        </td>
                                                                        <td>$53</td>
                                                                        <td class="text-c-blue">$15,652</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-inline-block align-middle">
                                                                                <h6>Photoshop</h6>
                                                                                <p class="text-muted m-b-0">Design
                                                                                    Software</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>26,421</td>
                                                                        <td>
                                                                            <div id="app-sale2" style="height:50px">
                                                                            </div>
                                                                        </td>
                                                                        <td>$35</td>
                                                                        <td class="text-c-blue">$18,785</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-inline-block align-middle">
                                                                                <h6>Flatable</h6>
                                                                                <p class="text-muted m-b-0">Admin App</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>10,652</td>
                                                                        <td>
                                                                            <div id="app-sale4" style="height:50px">
                                                                            </div>
                                                                        </td>
                                                                        <td>$20</td>
                                                                        <td class="text-c-blue">$7,856</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-12">
                                                <div class="card sale-card">
                                                    <div class="card-header">
                                                        <h5>Realtime Profit</h5>
                                                    </div>
                                                    <div class="card-block text-center">
                                                        <div id="realtime-profit" style="height:315px"></div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Sales Analytics</h5>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li class="first-opt"><i
                                                                        class="feather icon-chevron-left open-card-option"></i>
                                                                </li>
                                                                <li><i class="feather icon-maximize full-card"></i></li>
                                                                <li><i class="feather icon-minus minimize-card"></i></li>
                                                                <li><i class="feather icon-refresh-cw reload-card"></i>
                                                                </li>
                                                                <li><i class="feather icon-trash close-card"></i></li>
                                                                <li><i
                                                                        class="feather icon-chevron-left open-card-option"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div id="sales-analytics" style="height: 390px;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="styleSelector">
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
