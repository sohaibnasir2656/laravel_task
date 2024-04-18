@extends('layouts.admin')

@section('title')
    Add Employe
@endsection
@section('style')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
    .select2-container--default .select2-selection--single {
        height: 40px !important;
    }
</style>
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
                    <li><a href="#">Employes</a></li>
                    <li class="active">Add Employe</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Add Employe</strong>
        </div>
        <div class="card-body">
            <!-- Credit Card -->
            <div id="pay-invoice">
                <div class="card-body">
                    <hr>
                    <form action="{{ route('employes.store') }}" method="post" novalidate="" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">First Name</label>
                                    <input  name="first_name" type="text" class="form-control"  value="{{ old('first_name') }}" required>
                                    @error('first_name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="editor">Last Name</label>
                                <input class="form-control" type="text" id="" name="last_name" value="{{ old('last_name') }}" required>
                                @error('last_name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="editor">Company</label>
                                <select id="company_id" class="form-control js-example-basic-single" name="company_id" required>
                                    <option value="">Select Company</option>
                                    @foreach($companies as $company)
                                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                                    @endforeach
                                </select>
                                @error('company_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="editor">Email</label>
                                <input class="form-control" type="text" id="" name="email" value="{{ old('email') }}">
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-6" style="margin-top: 10px">
                                <label for="editor">Phone No</label>
                                <input class="form-control" type="text" id="" name="phone" value="{{ old('phone') }}">
                                @error('phone')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                            <div style="margin-top:10px">
                                <button id="payment-button" type="submit" class="btn btn-dark" style="float: right">Submit</button>
                                <a  href="{{  route('employes.index') }}" class="btn btn-danger" style="float: right;margin-right:10px">Cancel</a>
                            </div>

                    </form>
                </div>
            </div>

        </div>
    </div> <!-- .card -->

</div>
@endsection

@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
</script>

@endsection
