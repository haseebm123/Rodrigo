@extends('admin.layout.layout')
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
                                    <h4 class="card-title">Mortage Calculator</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-horizontal" action="{{ route('calculate.car.loan') }}"
                                            method="Post">
                                            @csrf

                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Loan Purpose
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <fieldset class="form-group">
                                                                    <select class="form-control" id="loan_purpose"
                                                                        name="loan_purpose">
                                                                        <option selected value="">Select Loan Purpose</option>
                                                                        <option value="purchase">Purchase</option>
                                                                        <option value="refinance">Refinance</option>
                                                                        <option value="heloc">HELOC</option>
                                                                        <option value="2nd_mortgage">2nd Mortgage</option>

                                                                    </select>
                                                                </fieldset>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Property Type
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <fieldset class="form-group">
                                                                    <select class="form-control" id="property_type"
                                                                        name="property_type">
                                                                        <option selected value="">Select Property Type</option>
                                                                        <option value="single_family">Single Family</option>
                                                                        <option value="condominium">Condominium</option>
                                                                        <option value="2_4_unit_multi_Family">2-4 Unit Multi-Family</option>
                                                                    </select>
                                                                </fieldset>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Property Occupancy
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <fieldset class="form-group">
                                                                    <select class="form-control" id="property_occupancy"
                                                                        name="property_occupancy">
                                                                        <option selected value="">Select Property Occupancy</option>
                                                                        <option value="primary_residency">Primary Residency</option>
                                                                        <option value="secondary_residency">Secondary Residency</option>
                                                                        <option value="investment_property">Investment Property</option>
                                                                    </select>
                                                                </fieldset>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Loan Type
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <fieldset class="form-group">
                                                                    <select class="form-control" id="loan_type"
                                                                        name="loan_type">
                                                                        <option selected value="">Select Loan Type</option>
                                                                        <option value="Conventional">Conventional</option>
                                                                        <option value="FHA">FHA</option>
                                                                        <option value="VA">VA</option>
                                                                        <option value="USDA">USDA</option>
                                                                        <option value="DSCR">DSCR</option>
                                                                        <option value="DSCR I/O">DSCR I/O</option>
                                                                        <option value="BSI or P&L">BSI or P&L</option>
                                                                        <option value="Hard Money I/O">Hard Money I/O</option>
                                                                        <option value="Other">Other</option>
                                                                    </select>
                                                                </fieldset>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Origination Fee Type
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <fieldset class="form-group">
                                                                    <select class="form-control" id="origination_fee_type"
                                                                        name="origination_fee_type">
                                                                        <option selected value="">Select Origination Fee Type</option>
                                                                        <option value="Lender Paid">Lender Paid</option>
                                                                        <option value="Borrower Paid">Borrower Paid</option>
                                                                    </select>
                                                                </fieldset>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Purchase Price or Appraisal Value
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="purchase_price" class="form-control"
                                                                    name="purchase_price"
                                                                    placeholder="Purchase Price or Appraisal Value ">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>LTV Percentage
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="ltv_percentage"
                                                                    class="form-control" name="ltv_percentage" required
                                                                    placeholder="LTV Percentage  ">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Loan Amount
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="loan_amount" class="form-control"
                                                                    name="loan_amount">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Loan Rate
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="loan_rate" class="form-control"
                                                                    name="loan_rate" placeholder="Loan Rate">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Loan Term
                                                                    <span>in years</span>
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <fieldset class="form-group">
                                                                    <select class="form-control" id="loan_term"
                                                                        name="loan_term">
                                                                       <option selected value="">Select Loan Term(in years)</option>
                                                                        <option value="10">10</option>
                                                                        <option value="11">11</option>
                                                                        <option value="12">12</option>
                                                                        <option value="13">13</option>
                                                                        <option value="14">14</option>
                                                                        <option value="15">15</option>
                                                                        <option value="16">16</option>
                                                                        <option value="17">17</option>
                                                                        <option value="18">18</option>
                                                                        <option value="19">19</option>
                                                                        <option value="20">20</option>
                                                                        <option value="21">21</option>
                                                                        <option value="22">22</option>
                                                                        <option value="22">22</option>
                                                                        <option value="23">23</option>
                                                                        <option value="24">24</option>
                                                                        <option value="25">25</option>
                                                                        <option value="26">26</option>
                                                                        <option value="27">27</option>
                                                                        <option value="28">28</option>
                                                                        <option value="29">29</option>
                                                                        <option value="30">30</option>
                                                                        <option value="31">31</option>
                                                                        <option value="32">32</option>
                                                                        <option value="33">33</option>
                                                                        <option value="34">34</option>
                                                                        <option value="35">35</option>
                                                                        <option value="36">36</option>
                                                                        <option value="37">37</option>
                                                                        <option value="38">38</option>
                                                                        <option value="39">39</option>
                                                                        <option value="40">40</option>

                                                                    </select>
                                                                </fieldset>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Annual Homeowner's Insurance
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="annual_home_owner_insurance"
                                                                    class="form-control"
                                                                    name="annual_home_owner_insurance"
                                                                    placeholder="Annual Homeowner's Insurance">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Annual Property Tax
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="annual_property_tax"
                                                                    class="form-control" name="annual_property_tax"
                                                                    placeholder="Annual Property Tax  ">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Monthly Home Owner's Association Fee
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text"
                                                                    id="monthly_home_owner_association_fee"
                                                                    class="form-control"
                                                                    name="monthly_home_owner_association_fee"
                                                                    placeholder="Total  ">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Loan
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="total" class="form-control"
                                                                    name="total" placeholder="Total  ">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Loan
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="total" class="form-control"
                                                                    name="total" placeholder="Total  ">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Loan
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="total" class="form-control"
                                                                    name="total" placeholder="Total  ">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Discount Points or Lender Credit
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <fieldset class="form-group">
                                                                    <select class="form-control" id="loan_purpose"
                                                                        name="loan_purpose">
                                                                        <option selected value="">Select Property Type</option>
                                                                        <option value="">IT</option>
                                                                    </select>
                                                                </fieldset>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Monthly Payment
                                                                    <span>(with PMI, if applicable)</span>
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="monthly_payment" readonly
                                                                    class="form-control" name="monthly_payment"
                                                                    placeholder="Total  ">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Monthly Payment
                                                                    <span>(after PMI is removed, if applicable)</span>
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="monthly_payment1" readonly
                                                                    class="form-control" name="monthly_payment1"
                                                                    placeholder="Total  ">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>MI Termination </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" readonly id="mi_termination"
                                                                    class="form-control" name="mi_termination"
                                                                    placeholder="MI Termination">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Interest Paid <span>(through the life of the
                                                                        loan)</span>
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" readonly id="intrest_paid"
                                                                    class="form-control" name="intrest_paid"
                                                                    placeholder="Total">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Approximate Income Needed To Qualify <span>(43%-49%
                                                                        front-end & 45%-57% back-end DTI Ratios) </span>
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" readonly id="intrest_paid"
                                                                    class="form-control" name="intrest_paid"
                                                                    placeholder="Total">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Loan
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="total" class="form-control"
                                                                    name="total" placeholder="Total  ">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    {{-- Monthly Expenses --}}
                                                    <div class="col-12">

                                                        <h4 class="card-title">Monthly Expenses</h4>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th></th>
                                                                        <th>Borrower's Expenses</th>
                                                                        <th>Co-Borrower's Expenses</th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <span>
                                                                                Total Monthly Car
                                                                                <p>(Payment(s)) </p>
                                                                            </span>
                                                                        </td>
                                                                        <td>
                                                                            <div class="col-12">
                                                                                <div class="form-group row">
                                                                                    <input type="text"
                                                                                        id="borrower_monthly_car"
                                                                                        class="form-control"
                                                                                        name="borrower_monthly_car"
                                                                                        placeholder="Enter Total Monthly Car">
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="col-12">
                                                                                <div class="form-group row">
                                                                                    <input type="text"
                                                                                        id="co_borrower_monthly_car"
                                                                                        class="form-control"
                                                                                        name="co_borrower_monthly_car"
                                                                                        placeholder="Enter Total Monthly Car">
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <span>
                                                                                Total Credit Card
                                                                                <p>(Minimum Payment(s))</p>
                                                                            </span>
                                                                        </td>
                                                                        <td>
                                                                            <div class="col-12">
                                                                                <div class="form-group row">
                                                                                    <input type="text"
                                                                                        id="borrower_total_credit_card"
                                                                                        class="form-control"
                                                                                        name="borrower_total_credit_card"
                                                                                        placeholder="Enter Total Credit Card">
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="col-12">
                                                                                <div class="form-group row">
                                                                                    <input type="text"
                                                                                        id="co_borrower_total_credit_card"
                                                                                        class="form-control"
                                                                                        name="co_borrower_total_credit_card"
                                                                                        placeholder="Enter Total Credit Card">
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <span>
                                                                                Total Installment Loan
                                                                                <p>( Payment(s))</p>
                                                                            </span>
                                                                        </td>
                                                                        <td>
                                                                            <div class="col-12">
                                                                                <div class="form-group row">
                                                                                    <input type="text"
                                                                                        id="borrower_total_installment_loan"
                                                                                        class="form-control"
                                                                                        name="borrower_total_installment_loan"
                                                                                        placeholder="Enter Total Installment Loan">
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="col-12">
                                                                                <div class="form-group row">
                                                                                    <input type="text"
                                                                                        id="co_borrower_total_installment_loan"
                                                                                        class="form-control"
                                                                                        name="co_borrower_total_installment_loan"
                                                                                        placeholder="Enter Total Installment Loan">
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <span>
                                                                                Total Student Loan

                                                                                <p>(Payment(s))</p>
                                                                            </span>
                                                                        </td>
                                                                        <td>
                                                                            <div class="col-12">
                                                                                <div class="form-group row">
                                                                                    <input type="text"
                                                                                        id="borrower_total_student_loan"
                                                                                        class="form-control"
                                                                                        name="borrower_total_student_loan"
                                                                                        placeholder="Enter Total Student Loan">
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="col-12">
                                                                                <div class="form-group row">
                                                                                    <input type="text"
                                                                                        id="co_borrower_total_student_loan"
                                                                                        class="form-control"
                                                                                        name="co_borrower_total_student_loan"
                                                                                        placeholder="Enter Total Student Loan">
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <span>
                                                                                Total Other Monthly Payment(s)
                                                                                <p>(Child Support, Tax Payment Plan, etc.)
                                                                                </p>
                                                                            </span>
                                                                        </td>
                                                                        <td>
                                                                            <div class="col-12">
                                                                                <div class="form-group row">
                                                                                    <input type="text"
                                                                                        id="borrower_total_other_monthly_payments"
                                                                                        class="form-control"
                                                                                        name="borrower_total_other_monthly_payments"
                                                                                        placeholder="Enter Total Other Monthly Payment">
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="col-12">
                                                                                <div class="form-group row">
                                                                                    <input type="text"
                                                                                        id="co_borrower_total_other_monthly_payments"
                                                                                        class="form-control"
                                                                                        name="co_borrower_total_other_monthly_payments"
                                                                                        placeholder="Enter Total Other Monthly Payment">
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <span>
                                                                                New Housing Expenses
                                                                                <p>(PITI + HOA)</p>
                                                                            </span>
                                                                        </td>
                                                                        <td>
                                                                            <div class="col-12">
                                                                                <div class="form-group row">
                                                                                    <input type="text"
                                                                                        id="borrower_new_house_expenses"
                                                                                        class="form-control"
                                                                                        name="borrower_new_house_expenses"
                                                                                        readonly>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="col-12">
                                                                                <div class="form-group row">
                                                                                    <input type="text"
                                                                                        id="co_borrower_new_house_expenses"
                                                                                        class="form-control"
                                                                                        name="co_borrower_new_house_expenses"
                                                                                        readonly>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <span>
                                                                                Total Individual
                                                                            </span>
                                                                        </td>
                                                                        <td>
                                                                            <div class="col-12">
                                                                                <div class="form-group row">
                                                                                    <input type="text"
                                                                                        id="borrower_total_individual"
                                                                                        class="form-control"
                                                                                        name="borrower_total_individual"
                                                                                        readonly>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="col-12">
                                                                                <div class="form-group row">
                                                                                    <input type="text"
                                                                                        id="co_borrower_total_individual"
                                                                                        class="form-control"
                                                                                        name="co_borrower_total_individual"
                                                                                        readonly>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                    {{-- Monthly Income & DTI Calculation --}}
                                                    <div class="col-12">

                                                        <h4 class="card-title">Monthly Expenses</h4>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th></th>
                                                                        <th>Borrower's Expenses</th>
                                                                        <th>Co-Borrower's Expenses</th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <span>
                                                                                Income
                                                                            </span>
                                                                        </td>
                                                                        <td>
                                                                            <div class="col-12">
                                                                                <div class="form-group row">
                                                                                    <input type="text"
                                                                                        id="borrower_income"
                                                                                        class="form-control"
                                                                                        name="borrower_income"
                                                                                        placeholder="Enter Income">
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="col-12">
                                                                                <div class="form-group row">
                                                                                    <input type="text"
                                                                                        id="co_borrower_income"
                                                                                        class="form-control"
                                                                                        name="co_borrower_income"
                                                                                        placeholder="Enter Imcome">
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <span>
                                                                                Front-end DTI

                                                                            </span>
                                                                        </td>
                                                                        <td>
                                                                            <div class="col-12">
                                                                                <div class="form-group row">
                                                                                    <input type="text"
                                                                                        id="borrower_front_end_dti"
                                                                                        class="form-control"
                                                                                        name="borrower_front_end_dti"
                                                                                        placeholder="Enter Front-end DTI"
                                                                                        readonly>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="col-12">
                                                                                <div class="form-group row">
                                                                                    <input type="text"
                                                                                        id="co_borrower_front_end_dti"
                                                                                        class="form-control"
                                                                                        name="co_borrower_front_end_dti"
                                                                                        placeholder="Enter Front-end DTI"
                                                                                        readonly>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>
                                                                            <span>
                                                                                Back-end DTI

                                                                            </span>
                                                                        </td>
                                                                        <td>
                                                                            <div class="col-12">
                                                                                <div class="form-group row">
                                                                                    <input type="text"
                                                                                        id="borrower_back_end_dti"
                                                                                        class="form-control"
                                                                                        name="borrower_back_end_dti"
                                                                                        placeholder="Enter back-end DTI"
                                                                                        readonly>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="col-12">
                                                                                <div class="form-group row">
                                                                                    <input type="text"
                                                                                        id="co_borrower_back_end_dti"
                                                                                        class="form-control"
                                                                                        name="co_borrower_back_end_dti"
                                                                                        placeholder="Enter Back-end DTI"
                                                                                        readonly>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>


                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Combined Front-end DTI

                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="combined_front_end_dti"
                                                                    class="form-control" name="combined_front_end_dti"
                                                                    readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Combined Back-end DTI
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="combined_back_end_dti"
                                                                    class="form-control" name="combined_back_end_dti"
                                                                    readonly>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    {{-- Estimated Closing Costs --}}
                                                    <div class="col-12">
                                                        <h4 class="card-title">Estimated Closing Costs</h4>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Underwriting Fee
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="underwriting_fee"
                                                                    class="form-control" name="underwriting_fee">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Appraisal
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="appraisal" class="form-control"
                                                                    name="appraisal" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Appraisal Re-Inspection
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="apprasisal_re_inspection"
                                                                    class="form-control" name="apprasisal_re_inspection"
                                                                    value="250">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Credit Report
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="credit_report"
                                                                    class="form-control" name="credit_report" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Tax Service
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="tax_service"
                                                                    class="form-control" name="tax_service" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Flood Certification
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="flood_certificate"
                                                                    class="form-control" name="flood_certificate"
                                                                    readonly>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>MERS Fee
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="mers_fee" class="form-control"
                                                                    name="mers_fee" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Pre-paid Interest
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="pre_paid_interest"
                                                                    class="form-control" name="pre_paid_interest"
                                                                    readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Full HOI
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="full_hoi" class="form-control"
                                                                    name="full_hoi" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Escrow HOI
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="escrow_hoi"
                                                                    class="form-control" name="escrow_hoi" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Escrow Taxes
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="escrow_tax"
                                                                    class="form-control" name="escrow_tax" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Settlement Fee
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="settlement_fee"
                                                                    class="form-control" name="settlement_fee" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Owner's Title Insurance
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="owner_title_insurance"
                                                                    class="form-control" name="owner_title_insurance"
                                                                    readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Lender's Title Insurance
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="lender_title_insurance"
                                                                    class="form-control" name="lender_title_insurance"
                                                                    readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Title Search
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="title_search"
                                                                    class="form-control" name="title_search" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Courier
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="courier" class="form-control"
                                                                    name="courier" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Plot Plan
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="plot_plan" class="form-control"
                                                                    name="plot_plan" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Recording Fees + MLC
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="recording_fees"
                                                                    class="form-control" name="recording_fees" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Other Closing Fees
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="other_closing_fees"
                                                                    class="form-control" name="other_closing_fees"
                                                                    placeholder="Other Closing Fees">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    {{-- Payoff Accelerator --}}
                                                    <div class="col-12">
                                                        <h4 class="card-title">Payoff Accelerator</h4>
                                                    </div>
                                                    <div class="col-12">
                                                        <p class="card-title">Sending extra payments towards your
                                                            principal balance significantly affects the
                                                            amortization schedule of the loan, helping you to pay it off
                                                            earlier.</p>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Desired Loan Term, paid off in years
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="desired_loan_term"
                                                                    class="form-control" name="desired_loan_term" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Minimum Monthly Payment (PITI+HOA)
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="minimum_monthly_payment"
                                                                    class="form-control" name="minimum_monthly_payment" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Extra Monthly Payment
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="extra_monthly_payment"
                                                                    class="form-control" name="extra_monthly_payment"
                                                                    placeholder="Extra Monthly Payment ">
                                                            </div>
                                                        </div>
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
    <script>

        function calLoanAmount(){
            purchase_price = $('#purchase_price').val();
            purchase_price = parseFloat(purchase_price).toFixed(2);

            ltv_percentage = $('#ltv_percentage');
            ltv_percentage = parseFloat(ltv_percentage.val()).toFixed(2);

            if (purchase_price > 0 && ltv_percentage > 0) {
                var rate = ltv_percentage/100;
                var result = purchase_price*rate;
                result = parseFloat(result).toFixed(2);
                return result;

            }else{
                return '';

            }

        }

        $(document).ready(function () {
            var purchase_price = 0;
            var ltv_percentage = 0 ;

            $("#purchase_price").keyup(function(){
                var callLoanAmount = calLoanAmount();
                $('#loan_amount').val(callLoanAmount);

            });
            $("#ltv_percentage").keyup(function(){
                var callLoanAmount = calLoanAmount();
                $('#loan_amount').val(callLoanAmount);
            });
        });
    </script>
@endsection
