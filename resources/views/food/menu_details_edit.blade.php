@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-7 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h4>Food Menu Details Form</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('menu.details.update') }}" method="post">
                            @csrf
                            <input type="hidden"  name="details_id" value="{{ $details_info->id }}">

                            <div class="my-3">
                                <label for="" class="form-label">Food Variant</label>

                                <select name="variant_id" class="form-control">
                                    {{-- <option value="{{ $food_variant->first()->name }}"> -- Select --</option> --}}
                                    @foreach ($food_variant as $variant)
                                        <option value="{{ $variant->id }}" {{ ($variant->id == $details_info->variant_id? 'selected':'') }}>{{ $variant->name }}</option>
                                    @endforeach
                                </select>
                                @error('variant_id')
                                    <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="my-3">
                                <label for="" class="form-label">Food Menu</label>

                                <select name="menu_id" class="form-control">
                                    @foreach ($menus as $menu)
                                        <option value="{{ $menu->id }}" {{ ($menu->id == $details_info->menu_id? 'selected':'') }}>{{ $menu->name }}</option>
                                    @endforeach
                                </select>
                                @error('menu_id')
                                    <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="my-3">
                                <label for="" class="form-label">Day</label>

                                <select name="day_id" class="form-control">
                                    @foreach ($days as $day)
                                        <option value="{{ $day->id }}" {{ ($day->id == $details_info->day_id? 'selected':'') }}>{{ $day->day }}</option>
                                    @endforeach
                                </select>
                                @error('day_id')
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
