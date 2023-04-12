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

                <div class="col-md-7 m-auto">
                    <div class="card table-card">
                        <div class="card-header">
                            <h5>Food Plan Edit</h5>
                        </div>
                        <div class="card-block">
                            <div class="table-responsive">
                                <form action="{{ route('food.plan.update') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="plan_id" value="{{ $plan_id->id }}">
                                    <div class="my-3 mx-3">
                                        <label for="" class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $plan_id->name }}">
                                    </div>
                                    <div class="my-3 mx-3">
                                        <label for="" class="form-label">Total Day</label>
                                        <input type="text" name="total_day" class="form-control" placeholder="Total Day" value="{{ $plan_id->total_day }}">
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
