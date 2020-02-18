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
                <th scope="col">Download Link</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Image Data</td>
                <td>
                    <a class="btn btn-sm btn-primary" href="http://">Download</a>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Text Data</td>
                <td>
                    <a class="btn btn-sm btn-primary" href="http://">Download</a>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Jessica-bio-data</td>
                <td>Biological Data</td>
                <td>
                    <a class="btn btn-sm btn-primary" href="http://">Download</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection