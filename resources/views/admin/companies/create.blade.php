@extends('layouts.admin')

@section('title')
    Add Company
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
                    <li><a href="#">Companies</a></li>
                    <li class="active">Add Company</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Add Company</strong>
        </div>
        <div class="card-body">
            <!-- Credit Card -->
            <div id="pay-invoice">
                <div class="card-body">
                    <hr>
                    <form action="{{ route('companies.store') }}" method="post" novalidate="" enctype="multipart/form-data">
                        @csrf
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1"> Company Name</label>
                                        <input id="cc-pament" name="name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{ old('name') }}" required>
                                        @error('name')
                                         <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="editor">Email</label>
                                    <input class="form-control" type="email" id="" name="email" value="{{ old('email') }}" required ></input>
                                    @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="x_card_code" class="control-label mb-1">Upload Logo</label>
                                    <div class="input-group">
                                        <input id="x_card_code" name="logo" type="file" class="form-control" value="">
                                        @error('logo')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="editor">Webiste</label>
                                    <input class="form-control" type="text" id="" name="website" value="{{ old('website') }}" required></input>
                                    @error('website')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div style="margin-top:10px">
                                <button id="payment-button" type="submit" class="btn btn-dark" style="float: right">Submit</button>
                                <a  href="{{  route('companies.index') }}" class="btn btn-danger" style="float: right;margin-right:10px">Cancel</a>
                            </div>

                    </form>
                </div>
            </div>

        </div>
    </div> <!-- .card -->

</div>
@endsection
