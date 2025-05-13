@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Text Variable</h1>
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
                                <h3 class="card-title">Edit Text Variable</h3>
                            </div>
                            <form action="{{ route('admin.text_variables.update', $textVariable->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="key">Key</label>
                                        <input type="text" name="key" class="form-control" value="{{ $textVariable->key }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="text_en">English Text</label>
                                        <input type="text" name="text_en" class="form-control" value="{{ $textVariable->text_en }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="text_es">Spanish Text</label>
                                        <input type="text" name="text_es" class="form-control" value="{{ $textVariable->text_es }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="text_ru">Russian Text</label>
                                        <input type="text" name="text_ru" class="form-control" value="{{ $textVariable->text_ru }}">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection 