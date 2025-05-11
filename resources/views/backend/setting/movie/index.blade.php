@extends('backend.layout.master')
@section('m_menu-open','menu-open')
@section('m_active','active')
@section('content')
  <style>
      .truncated-description {
      white-space: nowrap; /* Prevent the text from wrapping onto multiple lines */
      overflow: hidden;    /* Hide the overflow text */
      text-overflow: ellipsis; /* Add '...' when the text overflows */
      max-width: 200px; /* Adjust the max-width based on your table design */
      }
  </style>
     <!-- Content Header (Page header) -->
     <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">MOVIES LIST</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">List</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->

        <div class="card card-success card-outline">
            

            <!-- /.card -->
          </div>
      </div>
      <!-- /.content-header -->

       <!-- Main content --> 
       <div class="content">
        <div class="container-fluid">
          <div class="row">

            <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Movie Table</h3>
    
                    <div class="card-tools">
                      <div class="input-group input-group-sm">
                        
    
                        <div class="input-group-append">
                            <a href="{{url('movie/create')}}" type="button" class="btn btn-primary btn-block"><i class="fas fa-plus-square"></i>  Create Movie
                            </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Title</th>
                          <th>Description</th>
                          <th>Duration</th>
                          <th>picture</th>
                          <th>Video</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>

                        @foreach ($movies as $key => $value)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$value->title}}</td>
                                 <td class="truncated-description">{{ $value->description }}</td> <!-- Truncate Description -->
                                <td>{{$value->duration}}</td>
                                <td>{{$value->picture}}</td>
                                <td>{{$value->video}}</td>
                                <td>
                                    <button type="button" class="btn btn-outline-info"><i class="far fa-eye"></i>view</button>
                                    <a href="{{url('movie/'.$value->id.'/edit')}}" class="btn btn-outline-primary"><i class="far fa-edit"></i>edit</a>
                                    <form action="{{ url('movie/'.$value->id) }}" method="POST" style="display: inline;">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" onclick="confirmDelete(event)" class="btn btn-outline-danger">
                                          <i class="fas fa-trash"></i> Delete
                                      </button>
                                  </form>
                                  
                                  <script>
                                  function confirmDelete(e) {
                                      e.preventDefault();
                                      const form = e.target.closest('form');
                                      
                                      Swal.fire({
                                          title: 'Are you sure?',
                                          text: "This action cannot be undone!",
                                          icon: 'warning',
                                          showCancelButton: true,
                                          confirmButtonColor: '#d33',
                                          cancelButtonColor: '#3085d6',
                                          confirmButtonText: 'Delete',
                                          cancelButtonText: 'Cancel',
                                          reverseButtons: true
                                      }).then((result) => {
                                          if (result.isConfirmed) {
                                              form.submit();
                                          }
                                      });
                                  }
                                  </script>
                                    


                                </td>
                            </tr>
                        @endforeach
                        
                        
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
          </div>
        </div>
        <div class="card-body">
          <button type="button" class="btn btn-success swalDefaultSuccess">
            Launch Success Toast
          </button>
          <button type="button" class="btn btn-info swalDefaultInfo">
            Launch Info Toast
          </button>
          <button type="button" class="btn btn-danger swalDefaultError">
            Launch Error Toast
          </button>
          <button type="button" class="btn btn-warning swalDefaultWarning">
            Launch Warning Toast
          </button>
          <button type="button" class="btn btn-default swalDefaultQuestion">
            Launch Question Toast
          </button>
          <div class="text-muted mt-3">
            For more examples look at <a href="https://sweetalert2.github.io/">https://sweetalert2.github.io/</a>
          </div>
        </div>
       </div>

@endsection

@section('type_message')
<script>
    $(function() {
      var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });
  
      @if(session('flash_message'))
        Toast.fire({
            icon: 'success',
            title: '{{session('flash_message')}}'
            })
      @endif

      @if(session('info'))
        Toast.fire({
            icon: 'info',
            title: '{{session('info')}}'
            })
      @endif

      @if(session('error'))
        Toast.fire({
            icon: 'error',
            title: '{{session('error')}}'
            })
      @endif


      $('.swalDefaultSuccess').click(function() {
        Toast.fire({
          icon: 'success',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.swalDefaultInfo').click(function() {
        Toast.fire({
          icon: 'info',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.swalDefaultError').click(function() {
        Toast.fire({
          icon: 'error',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.swalDefaultWarning').click(function() {
        Toast.fire({
          icon: 'warning',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
     
  
      
      
    });
  </script>

@endsection