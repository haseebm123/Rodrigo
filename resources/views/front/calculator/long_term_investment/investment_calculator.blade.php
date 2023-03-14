@extends('front.layout.layout')
@section('header-script')
@endsection

@section('body-section')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">

            <div class="content-body">
                <!-- Basic Horizontal form layout section start -->
                <section id="basic-horizontal-layouts">
                    <div class="row match-height">
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Long Term Investment Calculator</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-horizontal" action="{{ route('calculate.investment') }}"
                                            method="Post">
                                            @csrf

                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Initial Principal Investment
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="initail_investment"
                                                                    class="form-control" name="initail_investment"
                                                                    placeholder="Initial Principal Investment" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Recurring Monthly Investment</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="recurring_monthly_investment"
                                                                    class="form-control" name="recurring_monthly_investment"
                                                                    placeholder="Recurring Monthly Investment" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Starting Age </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="starting_age" class="form-control"
                                                                    name="starting_age" placeholder="Starting Age "
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <fieldset class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Average Interest Rate </span>
                                                            </div>
                                                            <div class="col-md-8">

                                                                <select class="form-control" id="basicSelect" name="interest_rate">
                                                                    @foreach ($data['intrest_rate'] as $item)
                                                                        <option value="{{ $item['value'] }}">{{ $item['percent'] }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </fieldset>
                                                    </div>

                                                    <div class="col-md-8 offset-md-4">
                                                        <button type="submit" class=" btn btn-primary mr-1 mb-1"
                                                            id="calulatorBtn">Submit</button>
                                                        <button type="reset"
                                                            class="btn btn-outline-warning mr-1 mb-1">Reset</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>


            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection

@section('footer-section')
@endsection

@section('footer-script')
@endsection
