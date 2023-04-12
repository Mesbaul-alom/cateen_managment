@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-7 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h4>Food Variant Edit Form</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('food.variant.uplode') }}" method="post">
                            @csrf
                            <input type="hidden"  name="variant_id" value="{{ $variant_id->id }}">

                            <div class="my-3">
                                <label for="" class="form-label">Food Variant Name</label>

                                <input type="text" class="form-control" name="name" value="{{ $variant_id->name }}">
                                @error('name')
                                    <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                            </div>


                            <div class="my-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
