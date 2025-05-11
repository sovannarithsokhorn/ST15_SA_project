@extends('backend.layout.master')

@section('content')

     <!-- Content Header (Page header) -->
     <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Edit Movie</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Edit</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

       <!-- Main content -->
       <div class="content">
        <div class="container-fluid">
          <div class="row">

            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Movie Form</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="{{url('movie/'.$movies->id)}}" method="POST">
                    @csrf
                    @method('put')
                    <div class="card-body">
                      <div class="form-group">
                        <label >Title</label>
                        <input type="text" name="title" value="{{$movies->title}}" class="form-control" placeholder="Enter title">
                        <small class="text-danger">
                            @error('title')
                                {{ $message }}
                            @enderror
                        </small>
                      </div>
                      <div class="form-group">
                        <label >Description</label>
                        <input type="text" name="description" value="{{$movies->description}}" class="form-control"  placeholder="Enter description">
                        <small class="text-danger">
                            @error('description')
                            {{ $message }}
                        @enderror
                        </small>
                      </div>
                      <div class="form-group">
                        <label >Duration</label>
                        <input type="text" name="duration" class="form-control"  placeholder="Enter duration">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" name="picture" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                          </div>
                        </div>
                      </div>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                      </div>
                    </div>
                    <!-- /.card-body -->
    
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Update</button>
                    </div>
                  </form>
                </div>
                
                <!-- /.card -->
    
              </div>
          </div>
        </div>
       </div>

@endsection