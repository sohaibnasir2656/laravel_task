@extends('layouts.admin')

@section('title')
  All Employes
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
                    <li class="active">All Employes</li>
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
                        <strong class="card-title">Employes</strong>
                        <a style="float:right" href="{{ route('employes.create') }}" class="btn btn-dark">Add New Employe</a>
                    </div>
                    <div class="">
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Company Name</th>
                                    <th>Email</th>
                                    <th>Phone No</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($employes as $employe)
                                <tr>
                                    <td>{{ $employe->id }}</td>
                                    <td>{{ $employe->first_name }}</td>
                                    <td>{{ $employe->last_name }}</td>
                                    <td>{{ $employe->company->name }}</td>
                                    <td>{{ $employe->email }}</td>
                                    <td>{{ $employe->phone }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <div>
                                                <a href="{{ route('employes.show', $employe->id) }}" class="btn btn-info">View</a>
                                                <a href="{{ route('employes.edit', $employe->id) }}" class="btn btn-primary">Edit</a>
                                            </div>
                                            <div style="margin-left: 4px;">
                                                <form id="delete-form-{{ $employe->id }}" action="{{ route('employes.destroy', $employe->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-danger delete-record" data-id="{{ $employe->id }}">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7"  style="text-align: center;">No Employes Found.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>

                        {{ $employes->links('admin.pagination.custom') }}
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
