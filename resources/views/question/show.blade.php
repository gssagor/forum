@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                <h1 class="display-5">{{ $question->title }}</h1>
                <p class="lead">Asked by <span style="font-style:italic;font">{{ $question->user->name }}</span> on {{ $question->created_at->toFormattedDateString() }}</p>
                <p class="underline"></p>
            </div>
            
            <div class="container ques-wrapper" style="margin-bottom:150px">
               <div class="qus-des">
                   {!! $question->description !!}
               </div>
            </div>
        </div>
        <div class="col-md-3" style="padding-top:120px">
            <h5 style="color:#777; border-bottom: 1px solid #dedede;padding-bottom:5px">Related Questions</h5>
            <ul>
                @foreach ($relatedQuestions as $relatedQuestion)
                    <li><a href="/question/{{ $relatedQuestion->id }}">{{ $relatedQuestion->title }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        @include('laravelLikeComment::comment', ['comment_item_id' => $question->id])
    </div>
</div>

@endsection