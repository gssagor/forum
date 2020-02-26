@extends('layouts.master')

@section('content')
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Datasets</h1>
    <p class="lead">Find your desired dataset uploaded by community members. Please remember that <strong>StuckInAI</strong> will not be responsible for unauthorized use of dataset.</p>
</div>

<div class="container" style="margin-bottom:150px;margin-top:30px">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Dataset Name</th>
                <th scope="col">Category</th>
                <th scope="col">Uploaded By</th>
                <th scope="col">Uploaded On</th>
                <th scope="col">Download Link</th>
            </tr>
        </thead>
        <tbody>
            @php
                $counter =1;
            @endphp
            @foreach ($datasets as $dataset)
                <tr>
                    <th scope="row">{{ $counter }}</th>
                <td>{{ $dataset->name }}</td>
                    <td>{{ $dataset->category->name }}</td>
                    <td>Mark</td>
                    <td>{{ $dataset->created_at->toFormattedDateString() }}</td>
                    <td>
                    <a download="{{ $dataset->file }}" class="btn btn-sm btn-primary" href="/download/{{ $dataset->file }}">Download</a>
                    </td>
                </tr>
                @php
                    $counter++;
                @endphp
            @endforeach
           
        </tbody>
    </table>
</div>
@endsection