@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>ADMIN INDEX</h1>
    <div class=" table table-responsive">
        <table class=" table table-light mb-1">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Thumb</th>
                    <th scope="col">Technologies</th>
                </tr>
            </thead>
            
            <tbody>
                @forelse($projects as $project)
                    <tr>
                        <td scope="col">{{$project->id}}</td>
                        <td scope="col">{{$project->title}}</td>
                        <td scope="col">{{$project->description}}</td>
                        <td scope="col">
                            <img width="100px" src="{{$projects->thumb}}" alt="">
                        </td>
                        <td scope="col">{{$project->Technologies}}</td>
                        <td>
                            <button class=" btn btn-secondary">
                                <a class=" text-white" href="">VIEW</a>
                            </button>
                        </td>
                        <td>
                            <button class=" btn btn-secondary">
                                <a class=" text-white" href="">
                                    EDIT
                                </a>
                            </button>
                        </td>
                        <td>
                            <button class="btn btn-danger" type="button" data-bs-toggle="modal"
                            data-bs-target="">
                                DESTROY
                             </button>
                        </td>
                    </tr>
                
                    @empty
                <h1>No data to show</h1>
                    
                @endforelse
            </tbody>
        </thead>
    </table>

    </div>
</div>
@foreach($projects as $project)

    
@endforeach
@endsection