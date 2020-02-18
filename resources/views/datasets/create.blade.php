@extends('layouts.master')

@section('content')
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Upload Your Dataset</h1>
    <p class="lead">Make you datasets available for the community!</p>
</div>

<div class="container" style="margin-bottom:150px">
    <form>
        @csrf
        <div class="form-group">
            <label for="datasetName">Dataset Name</label>
            <input type="text" class="form-control" id="datasetName"
                >
        </div>
        <div class="form-group">
            <label for="inputState">Category of Dataset</label>
            <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>Image data</option>
                <option>Text data</option>
                <option>Sound data</option>
                <option>Signal data</option>
                <option>Biological data</option>
            </select>
        </div>
        <fieldset class="form-control" style="margin-bottom:30px">
                <legend style="font-size:inherit">Upload your file</legend>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </fieldset>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection