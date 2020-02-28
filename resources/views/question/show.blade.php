@extends('layouts.master')

@section('js')
    <script>
        tinymce.init({
        selector: 'textarea#description',
        height: 500,
        plugins: [
        'advlist autolink lists link image charmap print preview hr anchor pagebreak',
        'searchreplace wordcount visualblocks visualchars code fullscreen',
        'insertdatetime media nonbreaking save table contextmenu directionality',
        'emoticons template paste textcolor colorpicker textpattern imagetools'
        ],
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        toolbar2: 'print preview media | forecolor backcolor emoticons',
        image_advtab: true
        });
    </script>
@endsection

@section('content')
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Ask Your Question</h1>
    <p class="lead">Make best use of our great community!</p>
</div>

<div class="container" style="margin-bottom:150px">
   <h2>{{ $question->title }}</h2>
   <div class="qus-des">
       {!! $question->description !!}
   </div>
</div>
@endsection