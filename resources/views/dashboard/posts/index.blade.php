@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 fst-italic">My To Do List</h1>
    </div>

    @if(session()->has('success'))
      <div class="alert alert-success col-md-4" role="alert">
        {{ session('success') }}
      </div>
    @endif

    <div class="table-responsive col-lg-8">
        <a href="/dashboard/posts/create" class="btn btn-primary mb-3 fw-semibold float-end"
         style="background-color: #8064A2"><span data-feather="plus"></span> Add New</a> 
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">TO DO LIST</th>
              <th scope="col">STATUS</th>
              <th scope="col">ACTION</th>
            </tr>
          </thead>
          <tbody>


            @foreach ($posts as $post)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $post->title }}</td>
              <td><input data-id="{{$post->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="secondary" data-toggle="toggle" data-on="Done" data-off="In process" {{ $post->status ? 'checked' : '' }}></td>


              
              <td>
                <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">
                    <span data-feather="trash-2"></span>
                  </button>
                </form>
              </td>
          </tr>
            
            @endforeach

          </tbody>
        </table>
      </div>

         <script>
   $(function() { 
           $('.toggle-class').change(function() { 
           var status = $(this).prop('checked') == true ? 1 : 0;  
           var post_id = $(this).data('id');  
           $.ajax({ 
    
               type: "GET", 
               dataType: "json", 
               url: '/status', 
               data: {'status': status, 'post_id': post_id}, 
               success: function(data){ 
               console.log(data.success) 
            } 
         }); 
      }) 
   }); 
</script>


@endsection