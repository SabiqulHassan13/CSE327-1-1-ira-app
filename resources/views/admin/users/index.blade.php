@extends('admin.master')

@section('content')

<div class="row">
    <div class="col-md-12">        
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title">User List</h3>
            <a href="{{ route('admin.users.create') }}" class="btn btn-success py-0">Create a User</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>                       
                </thead>
                <tbody>
                    @forelse ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role->name }}</td>
                        <td>
                        <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>    
                            <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>    
                        </td>                            
                    </tr>
                    @empty
                        <tr>
                            <td colspan="5">No content available</td>
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
