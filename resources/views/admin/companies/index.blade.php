@extends('layouts.admin')

@section('title')
  Companies
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
                    <li class="active">All Company</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Companies</strong>
                        <a style="float:right" href="{{ route('companies.create') }}" class="btn btn-dark">Add New Company</a>
                    </div>
                    <div class="">
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Logo</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Website</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($companies as $company)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $company->logo) }}" alt="Company Logo" style="max-width: 50px;">
                                    </td>
                                    <td>{{ $company->name }}</td>
                                    <td>{{ $company->email }}</td>
                                    <td><a href="{{ $company->website }}" target="_blank">{{ $company->website }}</a></td>
                                    <td>
                                        <div class="d-flex">
                                            <div>
                                                <a href="{{ route('companies.show', $company->id) }}" class="btn btn-info">View</a>
                                                <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-primary">Edit</a>
                                            </div>
                                            <div class="" style="margin-left: 4px;">
                                                <form id="delete-form-{{ $company->id }}" action="{{ route('companies.destroy', $company->id) }}" method="post" style="margin-bottom: 0px">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-danger delete-record" data-id="{{ $company->id }}">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" style="text-align: center;">No Companies Found.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>

                        {{ $companies->links('admin.pagination.custom') }}


                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).on('click', ".delete-record", function() {
        Swal.fire({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this record!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Delete'
        }).then((result) => {
            if (result.value) {
                let id = $(this).data('id');
                $('#delete-form-' + id).submit();
            } else {
                Swal.fire(
                    'Cancelled',
                    'Your record is safe!',
                    'info'
                );
            }
        });
    });
    </script>


@endsection
