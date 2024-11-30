@extends("layouts.default")

@section("content")

<div class="d-flex justify-content-center">
    <div  class="container card shadow-sm" style="max-width: 500px ; margin-top: 100px;">
        <form class="p-3" method="POST" action="{{ route('task.add.post') }}" >
            @csrf
            <div>
                <div class="fs-4 fw-bold mb-3 d-flex justify-content-center">Add new Task</div>
                <input type="text" class="form-control" name="title" placeholder="Please Enter Task Name">
              </div>
              <div class="form-floating mt-2">
                <input type="datetime-local" name="deadLine" class="form-control" >
                <label for="deadLine">Date and Time</label>
                 {{-- <small class="form-text text-muted">Enter in the format YYYY-MM-DD HH:MM</small> --}}
            </div>
              <div class="mb-3">
               
                <textarea class="form-control mt-3"rows="3" name="description" placeholder="Description"></textarea>
              </div>
            
              <button type="submit" class="btn btn-success" >Submit</button>
        </form>
    
    </div>
</div>


@endsection