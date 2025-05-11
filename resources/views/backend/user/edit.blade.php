@extends('backend.layout.master')

@section('content')

     <!-- Content Header (Page header) -->
     <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Create User</h1>
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
                    <h3 class="card-title">User Form</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="{{url('user/'.$users->id)}}" method="POST">
                    @csrf
                    @method('put')
                    <div class="card-body">
                      <div class="form-group">
                        <label >Name</label>
                        <input type="text" name="name" value="{{$users->name}}" class="form-control" placeholder="Enter name">
                        <small class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </small>
                      </div>                      
                      <div class="form-group">
                        <label >email</label>
                        <input type="text" name="email" value="{{$users->email}}" class="form-control"  placeholder="Enter email">
                        <small class="text-danger">
                            @error('email')
                            {{ $message }}
                        @enderror
                        </small>
                      </div>
                      <div class="form-group">
                        <label >password</label>
                        <input type="text" name="password" value="{{$users->password}}" class="form-control"  placeholder="Enter password">
                        <small class="text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </small>
                      </div>
                      <div class="form-group">
                        <label>Level</label>
                        <select name="level" class="custom-select form-control-border">
                            <option value="User" @selected(old('level', $users->level ?? 'User') == 'User')>User</option>
                            <option value="Admin" @selected(old('level', $users->level ?? 'User') == 'Admin')>Admin</option>
                        </select>
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

@endsection