@extends('layouts.master')

@section('content')
<div class="pcoded-content">
    <div class="page-header card">
      <div class="row align-items-end">
        <div class="col-lg-6">
          <div class="page-header-title">
            <i class="feather icon-home bg-c-blue"></i>
            <div class="d-inline">
              <h3>Food Plan</h3>
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
                            <h5>Food Plan</h5>
                        </div>
                        <div class="card-block">
                            <div class="table-responsive">
                                <table class="table table-hover m-b-0">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Name</th>
                                            <th>Total Day</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($food_plan as $sl=>$plan)
                                        <tr>
                                            <td>{{ $sl+1 }}</td>
                                            <td>{{ $plan->name }}</td>
                                            <td>{{ $plan->total_day }}</td>
                                            <td>
                                                <a href="{{ route('food.plan.edit', $plan->id) }}"><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a>
                                                <a href="#!"><i class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a>
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
                            <h5>Food Plan Form</h5>
                        </div>
                        <div class="card-block">
                            <div class="table-responsive">
                                <form action="{{ route('food.plan.store') }}" method="POST">
                                    @csrf
                                    <div class="my-3 mx-3">
                                        <label for="" class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Name">
                                    </div>
                                    <div class="my-3 mx-3">
                                        <label for="" class="form-label">Total Day</label>
                                        <input type="text" name="total_day" class="form-control" placeholder="Total Day">
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
  </div>
@endsection
