@extends('layouts.app')

@section('content')    
    <table class="table">
        <thead>
            <th>Group Name</th>
            <th></th>
        </thead>
        <tbody>
            @foreach ($callgroups as $callgroup)    
                <tr>
                    <td>
                        <a href="/call-list">
                            {{$callgroup->name}}
                        </a>
                    </td>
                    <td>
                        {{$callgroup->call_group_id}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
