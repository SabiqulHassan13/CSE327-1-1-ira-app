@extends('admin.master')

@section('content')

<div class="row">
    <div class="col-md-12">        
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title">Course List</h3>
            <a href="{{ route('admin.courses.create') }}" class="btn btn-success py-0">Create a Course</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Instructor</th>
                        <th>Joining Code</th>
                        <th>Batch No</th>
                        <th>Starting Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>                       
                </thead>
                <tbody>
                    @forelse ($courses as $course)
                    <tr>
                        <td>{{ $course->id }}</td>
                        <td>{{ $course->title }}</td>
                        <td><img src="{{ asset($course->image) }}" alt="" width="70" height="50"></td>
                        <td>{{ $course->user->name }}</td>
                        <td>{{ $course->joining_code }}</td>
                        <td>{{ $course->batch_no }}</td>
                        <td>{{ $course->started_at }}</td>
                        <td>{{ $course->status == 1 ? 'Active' : 'Inactive' }}</td>
                      
                        <td class="d-flex ">
                            <a href="{{ route('admin.courses.edit', $course->id) }}" class="btn btn-warning btn-sm mr-1"><i class="fa fa-edit"></i></a>    

                            <form action="{{ route('admin.courses.destroy', $course->id) }}" method="POST">
                                @csrf 
                                @method('DELETE')
                                
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                            </form>    
                        </td>                            
                    </tr>
                    @empty
                        <tr>
                            <td colspan="9">No content available</td>
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
