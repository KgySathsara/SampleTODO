@extends('layouts\app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="page-titel">My Todo List</h1>
            </div>
            <div class="col-lg-12 mt-5">
                <form action="{{ route('todo.store') }}" method="post" enctype="multipart/form">
                    @csrf
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="form-group">
                                <input class="form-control" name="title" type="text" placeholder="Enter Task" >
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-9 mt-5">
                <div>
                    <table class="table table-striped">
                          <tr class="table-dark">
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($task as $key=>$task)
                                 <tr>
                                    <th scope="row">{{ ++$key }}</th>
                                    <td>{{ $task->title }}</td>
                                    <td>
                                        @if ($task->done == 0)
                                        <span class="badge bg-warning">Not Comleted</span>
                                        @else
                                        <span class="badge bg-success">Completed</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('todo.delete',$task->id) }}" >
                                            <button class="btn btn-red">Delete</button>
                                        </a>

                                        <a href="{{ route('todo.done',$task->id) }}" >
                                            <button class="btn btn-red">Done</button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('css')

<style>
    .page-titel
    {
        padding-top: 6vh;
        font-size: 4rem;
        color: #1b0b41;
    }

</style>

@endpush
