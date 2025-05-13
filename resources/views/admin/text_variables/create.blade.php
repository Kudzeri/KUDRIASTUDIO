@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Text Variable</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">New Text Variable</h3>
                            </div>
                            <form action="{{ route('admin.text_variables.store') }}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="key">Key</label>
                                        <input type="text" name="key" class="form-control" placeholder="Enter key">
                                    </div>
                                    <div class="form-group">
                                        <label for="text_en">English Text</label>
                                        <input type="text" name="text_en" class="form-control" placeholder="Enter English text">
                                    </div>
                                    <div class="form-group">
                                        <label for="text_es">Spanish Text</label>
                                        <input type="text" name="text_es" class="form-control" placeholder="Enter Spanish text">
                                    </div>
                                    <div class="form-group">
                                        <label for="text_ru">Russian Text</label>
                                        <input type="text" name="text_ru" class="form-control" placeholder="Enter Russian text">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection 