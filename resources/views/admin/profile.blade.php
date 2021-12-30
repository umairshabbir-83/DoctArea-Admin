@extends('layouts.app')

@section ('title')
🔗 Profile :: DoctArea | Efficient Doctor Patient Portal
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> 🔗 Profile</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>
                                User ID
                            </th>
                            <th>
                                User Name
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
                                    1
                                </td>
                                <td>
                                    ADMIN
                                </td>
                                <td>
                                    Administrator
                                </td>
                                <td>

                                </td>
                                <td>
                                    <a href="/edit" class="btn btn-success">Edit Profile</a>
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
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    admin@exp.com
                                </td>
                                <td>
                                    03123456789
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
