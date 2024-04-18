@extends('layouts.admin')

@section('title')
    Employe Detail
@endsection

@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="{{ route('employes.index') }}">Employes</a></li>
                    <li class="active">Employe Detail</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Employe Detail</strong>
        </div>
        <div class="card-body">
            <table class="table">
                <tbody>
                    <tr>
                        <th>First Name</th>
                        <td>{{ $employe->first_name }}</td>
                    </tr>
                    <tr>
                        <th>Last Name</th>
                        <td>{{ $employe->last_name }}</td>
                    </tr>
                    <tr>
                        <th>Company Name</th>
                        <td>{{ $employe->company->name }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $employe->email }}</td>
                    </tr>
                    <tr>
                        <th>Phone No</th>
                        <td>{{ $employe->phone }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Company Detail</strong>
        </div>
        <div class="card-body">
            <table class="table">
                <tbody>
                    <tr>
                        <th>Company Name</th>
                        <td>{{ $employe->company->name }}</td>
                    </tr>
                    <tr>
                        <th>Company Email</th>
                        <td>{{ $employe->company->email }}</td>
                    </tr>
                    <tr>
                        <th>Company Website</th>
                        <td>{{ $employe->company->website }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
