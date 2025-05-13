@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Text Variables</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="{{ route('admin.text_variables.create') }}" class="btn btn-primary">Add New</a>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Key</th>
                                        <th>English</th>
                                        <th>Spanish</th>
                                        <th>Russian</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($textVariables as $variable)
                                        <tr>
                                            <td>{{ $variable->id }}</td>
                                            <td>{{ $variable->key }}</td>
                                            <td>{{ $variable->text_en }}</td>
                                            <td>{{ $variable->text_es }}</td>
                                            <td>{{ $variable->text_ru }}</td>
                                            <td><a href="{{ route('admin.text_variables.edit', $variable->id) }}" class="btn btn-info">Edit</a></td>
                                            <td>
                                                <form action="{{ route('admin.text_variables.destroy', $variable->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection 