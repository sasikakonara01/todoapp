@extends('layouts.default') <!-- Extends the layout -->

@section("content")
<main class="flex-shrink-0 mt-5"> <!-- Adjusted margin for navbar -->
    <div class="container" style="margin-top: 50px">
        <!-- Alert Section -->
        <div class="container">
            @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif

            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
        </div>

        <div class="my-3 p-3 bg-body rounded shadow-sm container" style="max-width: 800px">
          <h6 class="border-bottom pb-2 mb-0">Suggestions</h6>
          @if($tasks->isEmpty()) <!-- Check if the $tasks collection is empty -->
            <div class="alert alert-warning">
                No tasks available at the moment.
            </div>
          @else
            @foreach ($tasks as $task)
            <div class="d-flex text-body-secondary pt-3 ">
              <svg style="margin-right: 10px"  xmlns="http://www.w3.org/2000/svg"  width="30"  height="30"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-briefcase"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 7m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" /><path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2" /><path d="M12 12l0 .01" /><path d="M3 13a20 20 0 0 0 18 0" /></svg>
              <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                <div class="d-flex justify-content-between">
                  <strong class="text-gray-dark">{{ $task->title }}</strong>
                  <div> 
                    <button class="btn btn-primary">Edit</button>
                    <button class="btn btn-danger">Delete</button>
                    <button class="btn btn-success">Done</button>
                  </div>
                </div>
                <span class="d-block">{{ $task->description }}</span>
              </div>
            </div>
            @endforeach
          @endif
          </div>
        </div>

    </div>
</main>
@endsection
