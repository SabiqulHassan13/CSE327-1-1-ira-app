@extends('admin.master')

@section('content')

<div class="row">
    <div class="col-md-12">        
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title">Assignment View</h3>
            <a href="{{ route('admin.assignments.index') }}" class="btn btn-success py-0">Assignment List</a>
            </div>
            <!-- /.card-header -->

            <div class="card-body">
                <iframe src="images/assignments/' . $assignment->file" style="width: 100%; height: 100%;"></iframe>
                {{-- <iframe src="{{ url('images/assignments/' . $assignment->file) }}" style="width: 100%; height: 100%;"></iframe> --}}

                {{-- <embed src="{{ url('images/assignments/' . $assignment->file) }}" type=”application/pdf” width=”100%” height=”100%”> --}}
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
    </div>
</div>

@endsection
