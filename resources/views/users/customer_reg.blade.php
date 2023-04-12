@extends('layouts.master')

@section('content')
    <section class="login-block">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 m-auto">

                    <form class="md-float-material form-material" action="{{ route('customer.store') }}" method="POST">
                        @csrf
                        {{-- <div class="text-center">
                            <img src="files/assets/images/logo" alt="logo.png">
                        </div> --}}
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">Sign up</h3>
                                    </div>
                                </div>
                                <p class="text-muted text-center p-b-5">Add Customer </p>
                                <div class="form-group form-primary">
                                    <input type="number" name="customer_id" class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Customer ID</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="text" name="org_name" class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Organization Name</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="text" name="customer_name" class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Customer Name</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="text" name="department" class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Department</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="email" name="email" class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Email ID</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="number" name="number" class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Contact Number</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="text" name="address" class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Address</label>
                                </div>

                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button
                                            class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign up
                                            now</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </section>
@endsection
