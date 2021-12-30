@extends('layouts.app')

@section ('title')
🔗 Edit Profile :: DoctArea | Efficient Doctor Patient Portal
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> 🔗 Edit Profile</h4>
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
                                    <input type="text" id="name" name="name" placeholder="ADMIN">
                                </td>
                                <td>
                                    Administrator
                                </td>
                                <td>

                                </td>
                                <td>
                                    <a href="#" class="btn btn-success">Update Profile</a>
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
                                    <input type="tel" id="phone" name="phone" placeholder="03123456789">
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
