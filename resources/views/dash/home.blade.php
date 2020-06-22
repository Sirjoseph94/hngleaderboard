@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    <div class="jumbotron">
                      <h1 class="display-4">Hello {{ Auth::user()->name }}</h1>
                      <p class="lead">This is your intern management dashboard</p>
                      <hr class="my-4">
                      <p>You can upload the list of interns from a JSON file, Spreadsheet or a CSV file</p>
                    </div>
                    <form enctype="multipart/form-data" method="post" action="/internSave">
                      @csrf
                      <div class="form-group form-check">
                        <input type="file" required name="interns_file">
                      </div>
                      <button type="submit" class="btn btn-primary">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
