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
                                                                <span>Total Purchase Price
                                                                    <label for="">
                                                                        (Car price, taxes, warranties, upgrades, etc.)
                                                                    </label>
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="total_purchase_price"
                                                                    class="form-control" name="total_purchase_price"
                                                                    placeholder="Total Purchase Price" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Down Payment </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="down_payment" class="form-control"
                                                                    name="down_payment" placeholder="Down Payment" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Trade In Value </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="trade_in_value"
                                                                    class="form-control" name="trade_in_value"
                                                                    placeholder="Down Payment" required>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Annual Percentage Rate </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" readonly id="annual_per_rate_dol"
                                                                    class="form-control" name="annual_per_rate_dol"
                                                                    placeholder="Down Payment">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Annual Percentage Rate </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="annual_per_rate_per"
                                                                    class="form-control" name="annual_per_rate_per"
                                                                    minlength="1" maxlength="100"
                                                                    placeholder="Down Payment" required>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Length of Loan
                                                                    <label for="">
                                                                        In Length
                                                                    </label>
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="length_loan" class="form-control"
                                                                    name="length_loan" placeholder="Down Payment" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row card-header">
                                                            <h1 class="card-title">Payment Estimate & Breakdown</h1>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Length of Loan</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="esti_length_of_loan"
                                                                    class="form-control" name="esti_length_of_loan"
                                                                    placeholder="Length of Loan" value="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Monthly Payment</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="esti_monthly_payment"
                                                                    class="form-control" name="esti_monthly_payment"
                                                                    placeholder="Monthly Payment" value="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Total Intrest Paid</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="esti_total_interest_paid"
                                                                    class="form-control" name="esti_total_interest_paid"
                                                                    placeholder="Total Intrest Paid" value="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Trade In Value </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="esti_total_cost_loan"
                                                                    class="form-control" name="esti_total_cost_loan"
                                                                    placeholder="Trade In Value " value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="financed_amount" id="financed_amount" value="">

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
    <script>
        function getFinancedAmount(p_price, d_price, t_price) {
            var d_amount = d_price - t_price
            if (d_amount > p_price) {
                toastr.error("Total Price Should be greater than ");
                return false;

            }
            return p_price - d_price - t_price;

        }

        function getMonthlyRate(percent) {

            if (percent <= 100) {
                var result = percent / 12;
                return result / 100;

            } else {
                toastr.error("should be lessthan equal than to 100");
            }

        }

        function getExtraData(amount, rate, month) {

            if (amount > 0 || rate != 0 || rate != null) {
                var result = amount * (rate * (Math.pow(1 + rate, month)))

                return result;

            }

        }

        function getExtraData2(rate, month) {
            if (rate != 0 || rate != null) {
                var result = (Math.pow(1 + rate, month)) - 1

                return result;

            }

        }

        function getIntrestPaid(amount, monthlyAmount, months) {
            var result = (monthlyAmount * months) - amount;
            return result;
        }
        $('#calulatorBtn').click(function(e) {
            // e.preventDefault();

            var total_purchase_price = $('#total_purchase_price').val();
            var down_payment = $('#down_payment').val();
            var trade_in_value = $('#trade_in_value').val();
            var length_loan = $('#length_loan');
            var annual_per_rate_dol = $('#annual_per_rate_dol');
            var annual_per_rate_per = $('#annual_per_rate_per').val();
            var esti_length_of_loan = $('#esti_length_of_loan');
            var esti_monthly_payment = $('#esti_monthly_payment');
            var esti_total_interest_paid = $('#esti_total_interest_paid');
            var esti_total_cost_loan = $('#esti_total_cost_loan');

            if (length_loan.val() < 6) {
                toastr.error("should be grater than 6 ");
                var loan = length_loan.val(6);
            }
            loan = length_loan.val();
            var financed_amount = getFinancedAmount(total_purchase_price, down_payment, trade_in_value);
            $('#financed_amount').val(financed_amount);

            var monthly_rate = getMonthlyRate(annual_per_rate_per);
            $('#monthly_rate').val(monthly_rate);

            annual_per_rate_dol.val(monthly_rate);
            var extra_col_1 = getExtraData(financed_amount, monthly_rate, length_loan.val());
            var extra_col_2 = getExtraData2(monthly_rate, length_loan.val());
            var monthlyPayment = '';

            if (extra_col_1 == 0) {
                monthlyPayment = financed_amount / length_loan.val();
            } else {
                monthlyPayment = extra_col_1 / extra_col_2
            }
            var total_intrest_paid = getIntrestPaid(financed_amount, monthlyPayment, length_loan.val());
            esti_monthly_payment.val(monthlyPayment);
            esti_total_interest_paid.val(total_intrest_paid);
            esti_total_cost_loan.val(financed_amount + total_intrest_paid);
            esti_length_of_loan.val(loan);



        });
    </script>
@endsection
