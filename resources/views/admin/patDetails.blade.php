@extends('layouts.app')

@section ('title')
🔗 Patient Detail :: DoctArea | Efficient Doctor Patient Portal
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> 🔗 Patient Detail</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>
                                Patient ID
                            </th>
                            <th>
                                Patient Name
                            </th>
                            <th>
                                User Type
                            </th>
                            <th>
                                Created On
                            </th>
                            <th>
                                Action
                            </th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    95
                                </td>
                                <td>
                                    Muhammad Aslam
                                </td>
                                <td>
                                    Patient
                                </td>
                                <td>

                                </td>
                                <td>
                                    <a href="/edit" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>
                                Email
                            </th>
                            <th>
                                Phone
                            </th>
                            <th>
                                Recent Medical History
                            </th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    aslam@exp.com
                                </td>
                                <td>
                                    03123456789
                                </td>
                                <td>
                                    <strong>COVID-19</strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> 🔗 Appointments Detail</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>
                                Successful Appointments
                            </th>
                            <th>
                                Canceled Appointments
                            </th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <h1>
                                        <strong>23</strong>
                                    </h1>
                                </td>
                                <td>
                                    <h1>
                                        <strong>10</strong>
                                    </h1>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
