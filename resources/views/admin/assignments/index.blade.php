@extends('admin.master')

@section('content')

<div class="row">
    <div class="col-md-12">        
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title">Assignment List</h3>
            <a href="{{ route('admin.assignments.create') }}" class="btn btn-success py-0">Create an Assignment</a>
            </div>
            <!-- /.card-header -->

            <div class="card-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Course</th>
                        <th>Due At</th>
                        <th>Action</th>
                    </tr>                       
                </thead>
                <tbody>
                    @forelse ($assignments as $assignment)
                    <tr>
                        <td>{{ $assignment->id }}</td>
                        <td>{{ $assignment->title }}</td>
                        <td>{{ $assignment->description }}</td>
                        <td>{{ $assignment->course->title }}</td>
                        <td>{{ $assignment->due_at }}</td>                     
                        <td class="d-flex justify-content-between">
                            <a href="{{ route('admin.assignments.show', $assignment->id) }}" target="_blank" class="btn btn-info btn-sm mr-1"><i class="fa fa-sign-in-alt"></i></a>

                            <a href="{{ route('admin.assignments.download', $assignment->id) }}" class="btn btn-success btn-sm mr-1"><i class="fa fa-download"></i></a>

                            <a href="{{ route('admin.assignments.edit', $assignment->id) }}" class="btn btn-warning btn-sm mr-1"><i class="far fa-edit"></i></a>

                            <form action="{{ route('admin.assignments.destroy', $assignment->id) }}" method="POST">
                                @csrf 
                                @method('DELETE')
                                
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                            </form>    
                        </td>                            
                    </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">No content available</td>
                        </tr>
                    @endforelse                     
                </tbody>

                {{ $assignments->links() }}

              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
    </div>
</div>

@endsection
