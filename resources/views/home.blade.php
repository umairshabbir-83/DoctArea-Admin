@extends('layouts.app')

@section ('title')
DoctArea | Efficient Doctor Patient Portal
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>Welcome to Management World!</h2>
                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <p>
                    <h2>How to manage users ?</h2>
                    <h4>✔️ Open Doctors/Patients Panel</h4>
                    <h4>✔️ View Doctors/Patients Profile</h4>
                    <h4>✔️ Block the user (Doctor/Patient) if need</h4>
                    <h4>✔️ Verify user (Doctor/Patient) if required</h4>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
