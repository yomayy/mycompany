@extends('layouts.app')

@section('title')
    Департаменты
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Управление департаментами</h4>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h5>Список департаментов</h5>
                    <table class="table1" border="1">
                        <tr>
                            <th>Dep_Id</th>
                            <th>Dep_Name</th>
                            <th>Dep_Manage</th>
                        </tr>
                        @foreach($deps as $dep)
                            <tr>
                                <td class="c1">{{ $dep->id }}</td>
                                <td>{{ $dep->dep_name }}</td>
                                <td class="c1">
                                    ♥
                                    <a href="">Details</a>
                                    ♥
                                    <a href="">Edit</a>
                                    ♥
                                    <a href="">Delete</a>
                                    ♥
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
