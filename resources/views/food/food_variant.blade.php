@extends('layouts.master')

@section('content')
    <div class="pcoded-content">
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-6">
                    <div class="page-header-title">
                        <i class="feather icon-home bg-c-blue"></i>
                        <div class="d-inline">
                            <h3>Food Variant</h3>
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
                                        <h5>Food Variant Table</h5>

                                    </div>
                                    <div class="card-block">
                                        <div class="table-responsive">
                                            <table class="table table-hover m-b-0">
                                                <thead>
                                                    <tr>
                                                        <th>SL</th>
                                                        <th>Name</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($food_variant as $sl => $food)
                                                        <tr>
                                                            <td>{{ $sl + 1 }}</td>
                                                            <td>{{ $food->name }}</td>
                                                            <td>
                                                                <a href="{{ route('variant.edit', $food->id) }}"><i
                                                                        class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a>
                                                                <a href="{{ route('variant.delete', $food->id) }}"><i
                                                                        class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a>
                                                            </td>
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
                                        <h5>Food Menu Details Form</h5>
                                    </div>
                                    <div class="card-block">
                                        <form action="{{ route('food.variant.store') }}" method="post">
                                            @csrf
                                            <div class="my-3 mx-3">
                                                <label class="form-label" for=""> Food Variant</label>
                                                <input type="text" name="food_variant" class="form-control"
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
