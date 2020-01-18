@extends('layouts.app')

@section('title')
    Департамент - {{ $dep->dep_name }}
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

                    <h5>Список должностей</h5>
                    <table class="table1" border="1">
                        <tr>
                            <th>Pos_Id</th>
                            <th>Pos_Name</th>
                            <th>Pos_Manage</th>
                        </tr>
                        @foreach($poss as $pos)
                            <tr>
                                <td class="c1">{{ $pos->id }}</td>
                                <td>{{ $pos->pos_name }}</td>
                                <td class="c1">
                                    ♥
                                    <a href="{{ url('departments/'.$dep->id) }}">Details</a>
                                    ♥
                                    <a href="">Edit</a>
                                    ♥
                                    <a href="">Delete</a>
                                    ♥
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <br>
                    <a href="{{ url('departments') }}">Назад к списку</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
