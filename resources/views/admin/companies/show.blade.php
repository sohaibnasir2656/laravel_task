@extends('layouts.admin')

@section('title')
    Company Detail
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
                    <li><a href="{{ route('companies.index') }}">Company</a></li>
                    <li class="active">Company Detail</li>
                </ol>
            </div>
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
                        <th>Company Logo</th>
                        <td><img src="{{ asset('storage/' . $company->logo) }}" alt="Company Logo" style="max-width: 100px;"></td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>{{ $company->name }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $company->email }}</td>
                    </tr>
                    <tr>
                        <th>Website</th>
                        <td><a href="{{ $company->website }}" target="_blank">{{ $company->website }}</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
