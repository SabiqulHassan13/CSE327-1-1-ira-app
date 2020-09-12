@extends('admin.master')

@section('content')

<div class="row">
    <div class="col-md-12">        
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title">Roles List</h3>
                <a href="" class="btn btn-success">Create a Role</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Action</th>
                    </tr>                       
                </thead>
                <tbody>
                    @forelse ($roles as $role)
                    <tr>
                        <td>{{ $role->id }}</td>
                        <td>{{ $role->name }}</td>
                        <td>{{ $role->slug }}</td>
                        <td>
                            <a href="" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>    
                            <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>    
                        </td>                            
                    </tr>
                    @empty
                        <tr>
                            <td colspan="4">No content available</td>
                        </tr>
                    @endforelse                    
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
    </div>
</div>

@endsection
