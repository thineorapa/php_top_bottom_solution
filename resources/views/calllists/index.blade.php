@extends('layouts.app')

@section('content')
    <table class="table">
        <thead> 
            <th>Level</th>
            <th>Name</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($calllists as $calllist)    
                <tr>
                    <td>{{ $calllist->level }}</td>
                    <td>{{ $calllist->name }}</td>
                    <td>
                        
                        <form action="{{ route('call-list.update', $calllist->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <button name="top" type="submit" class="btn btn-primary">Top</button>
                            <button name="up" class="btn btn-primary">Up</button>
                            <button name="down" class="btn btn-primary">Down</button>
                            <button name="bottom" class="btn btn-primary">Bottom</button>
                        </form>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection