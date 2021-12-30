@extends('layouts.app')

@section ('title')
🔗 Doctor Detail :: DoctArea | Efficient Doctor Patient Portal
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> 🔗 Doctor Detail</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>
                                Doctor ID
                            </th>
                            <th>
                                Doctor Name
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
                                    43
                                </td>
                                <td>
                                    Muhammad Aslam
                                </td>
                                <td>
                                    Doctor
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
                                Qualification
                            </th>
                            <th>
                                Specialist
                            </th>
                            <th>
                                Experience
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
                                    M.B.B.S
                                </td>
                                <td>
                                    Cardiologist
                                </td>
                                <td>
                                    3 Years
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
