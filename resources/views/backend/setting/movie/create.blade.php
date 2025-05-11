@extends('backend.layout.master')

@section('content')

     <!-- Content Header (Page header) -->
     <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Create Movie</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Create</li>
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
                  <form action="{{url('/movie')}}" method="POST">
                    @csrf
                    <div class="card-body">
                      <div class="form-group">
                        <label >Title</label>
                        <input type="text" name="title" value="{{old('title')}}" class="form-control" placeholder="Enter title">
                        <small class="text-danger">
                            @error('title')
                                {{ $message }}
                            @enderror
                        </small>
                      </div>
                      <div class="form-group">
                        <label >Description</label>
                        <input type="text" name="description" value="{{old('description')}}" class="form-control"  placeholder="Enter description">
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
                        <label for="exampleInputFile">Poster Input</label>
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

                      <div class="form-group">
                        <label for="exampleInputFile">Video input</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" name="video" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                    <!-- /.card-body -->
    
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
                    </div>
                  </form>
                </div>
                
                <!-- /.card -->
    
              </div>
          </div>
        </div>
       </div>
<script>
  document.querySelector('.custom-file-input').addEventListener('change', function (e) {
    var fileName = e.target.files[0].name;
    e.target.nextElementSibling.innerText = fileName;
  });
</script>
@endsection