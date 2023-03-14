@extends('admin/layout/layout')

@section('header-script')
@endsection

@section('body-section')
    <br>
    <section id="dashboard-analytics">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        {{-- <div class="card-header">

                                <a class="btn btn-success" href="{{ route('plan.create') }}"> Create New User</a>

                        </div> --}}
                        <!-- /.card-header -->

                        <div class="card-body">
                            <table class="table table-striped dataex-html5-selectors">
                                <thead>
                                    <tr>

                                        <th>Number of years making the same monthly contribution</th>
                                        <th>Your age then</th>
                                        <th>Total account balance at the end of this period</th>
                                        <th>Total invested during this period</th>
                                        <th>Total interest accrued during this period</th>
                                    </tr>
                                </thead>

                                @forelse ($result as $key => $item)
                                    <tr>
                                        <td>{{ $item['years'] }}</td>
                                        <td>{{ $item['age'] }}</td>
                                        <td>${{ $item['total_balance_year'] }}</td>
                                        <td>${{ $item['total_invest_year'] }}</td>
                                        <td>${{ $item['total_intrest_year'] }}</td>

                                    </tr>
                                @empty
                                @endforelse
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('footer-section')
@endsection

@section('footer-script')
@endsection
