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

                                       <th>Loan Term
                                            <br>
                                            <span>(In month)</span>
                                        </th>
                                        <th>Monthly Payment</th>
                                        <th>Total Interest Paid </th>
                                    </tr>
                                </thead>

                                @forelse ($result as $key => $item)
                                    <tr>
                                        <td>{{ $item['Loan Term'] }}</td>
                                        <td>${{ $item['Monthly Payment'] }}</td>
                                        <td>${{ $item['Total Interest Paid'] }}</td>





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
