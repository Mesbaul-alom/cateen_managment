@extends('layouts.master')

@section('content')
    <div class="pcoded-content">
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-6">
                    <div class="page-header-title">
                        <i class="feather icon-home bg-c-blue"></i>
                        <div class="d-inline">
                            <h3>Food Menu Details Table</h3>
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
                                        <h5>Customer Overview</h5>

                                    </div>
                                    <div class="card-block">
                                        <div class="table-responsive">
                                            <table class="table table-hover m-b-0">
                                                <thead>
                                                    <tr>
                                                        <th>SL</th>
                                                        <th>Variant</th>
                                                        <th>Menu</th>
                                                        <th>Day</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($menu_details as $sl => $details)
                                                        <tr>
                                                            <td>{{ $sl + 1 }}</td>
                                                            <td>{{ $details->rel_to_var->name }}</td>
                                                            <td>{{ $details->rel_to_menu->name }}</td>
                                                            <td>{{ $details->rel_to_day->day }}</td>
                                                            <td>
                                                                <a href="{{ route('details.edit', $details->id) }}"><i
                                                                        class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a>
                                                                <a href="{{ route('details.delete', $details->id) }}"><i
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
                                        <form action="{{ route('menu.details.store') }}" method="post">
                                            @csrf
                                            <div class="my-3 mx-3">
                                                <label for="" class="form-label">Food Variant</label>
                                                <select name="variant_id" id="" class="form-control">
                                                    <option value="">-- Select --</option>
                                                    @foreach ($food_variant as $variant)
                                                        <option value="{{ $variant->id }}">{{ $variant->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('variant_id')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                            <div class="my-3 mx-3">
                                                <label for="" class="form-label">Food Menu</label>
                                                <select name="menu_id" id="" class="form-control">
                                                    <option value="">-- Select --</option>
                                                    @foreach ($menus as $menu)
                                                        <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('menu_id')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                            <div class="my-3 mx-3">
                                                <label for="" class="form-label">Day</label>
                                                <select name="day_id" id="" class="form-control">
                                                    <option value="">-- Select --</option>
                                                    @foreach ($days as $day)
                                                        <option value="{{ $day->id }}">{{ $day->day }}</option>
                                                    @endforeach
                                                </select>
                                                @error('day_id')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
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
