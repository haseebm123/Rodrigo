@extends('admin/layout/layout')

@section('header-script')
@endsection

@section('body-section')
    <section class="input-validation dashboard-analytics">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-content">
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('plan.update',$data->slug??null) }}" novalidate
                                enctype="multipart/form-data" method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Plan Name</label>
                                            <div class="controls">
                                                <input type="text" name="name" class="form-control"
                                                    data-validation-required-message="This field is required"
                                                    placeholder="Plan Name"
                                                    value="{{ $data->name }}">
                                            </div>
                                        </div>
                                        {{-- <div class="form-group">
                                            <label>Currency</label>
                                            <div class="controls">
                                                <input type="text" name="currency" class="form-control" required
                                                    value="$" readonly
                                                    data-validation-required-message="This field is required"
                                                    placeholder="Cost">
                                            </div>
                                        </div> --}}
                                        <div class="form-group">
                                            <label>Cost</label>
                                            <div class="controls">
                                                <input type="text" name="cost" class="form-control" required
                                                    data-validation-required-message="This field is required"
                                                    placeholder="Cost"
                                                    disabled
                                                    value="{{ $data->price }}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <fieldset class="form-group">
                                                <label>Billing Peroid</label>
                                                <select class="custom-select" id="customSelect" name="billing_period" disabled>
                                                    <option selected="">Select Billing Period</option>
                                                    <option @if($data->billing_method == 'week') selected @endif value="week">Weekly</option>
                                                    <option @if($data->billing_method == 'month') selected @endif value="month">Monthly</option>
                                                    <option @if($data->billing_method == 'year') selected @endif value="year">Yearly</option>
                                                </select>
                                            </fieldset>
                                        </div>

                                        <fieldset class="form-label-group mb-0">
                                            <textarea class="form-control char-textarea" name="description" id="description" rows="3" placeholder="Description">
                                                {{ $data->description??null }}
                                            </textarea>

                                        </fieldset>

                                    </div>

                                </div>
                                <button type="submit" class="btn btn-primary mt-2">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('footer-section')
@endsection

@section('footer-script')
    <!-- <script src="{{ asset('assets/js/countrystatecity.js?v2') }}"></script> -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-149371669-1"></script>
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyDMzBtl2TKTecLe_NEmSup5U-nkj93Ch7o"></script>
    <link rel="stylesheet" href="{{ asset('app-assets/css/toastr.min.css') }}" />

    <script src="{{ asset('app-assets/js/waitMe.js') }}"></script>
    <script src="{{ asset('app-assets/js/toastr.min.js') }}"></script>

    <script>
        var loadFile = function(event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        };

    </script>

    <script type="text/javascript">
        var APP_URL = {!! json_encode(url('/')) !!}
    </script>
@endsection
