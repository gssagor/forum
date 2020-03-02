@extends('layouts.master')

@section('content')
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Questions</h1>
    <p class="lead">Ask questions to our huge community members. Please follow the code of conduct.</p>
</div>

<div class="container" style="margin-bottom:150px;margin-top:30px">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col">Submitted By</th>
                <th scope="col">Submitted On</th>
            </tr>
        </thead>
        <tbody>
            @php
                $counter =1;
            @endphp
            @foreach ($questions as $question)
                <tr>
                    <th scope="row">{{ $counter }}</th>
                    <td style="color:#0095ff;font-weight:700">
                    <a href="/question/{{ $question->id }}">
                            {{ $question->title }}
                        </a>
                    </td>
                    <td >{{ $question->category->name }}</td>
                    <td style="text-transform:capitalize">{{ $question->user->name }}</td>
                    <td>{{ $question->created_at->toFormattedDateString() }}</td>
                </tr>
                @php
                    $counter++;
                @endphp
            @endforeach
           
        </tbody>
    </table>
</div>
@endsection