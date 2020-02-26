@extends('layouts.master')

@section('content')
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Upload Your Dataset</h1>
    <p class="lead">Make you datasets available for the community!</p>
</div>

<div class="container" style="margin-bottom:150px">
    <form  action="/datasets" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
        <div class="form-group">
            <label for="datasetName">Dataset Name</label>
            <input type="text" class="form-control" id="datasetName" name="name" required>
        </div>
        <div class="form-group">
            <label for="inputState">Category of Dataset</label>
            <select name="category_id" id="inputState" class="form-control" required>
                <option value="" selected>Choose...</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <fieldset class="form-control" style="margin-bottom:30px">
                <legend style="font-size:inherit">Upload your file</legend>
                <input type="file" class="form-control-file" name="dataset" required/>
        </fieldset>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection