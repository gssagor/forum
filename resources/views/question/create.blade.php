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
    <form  action="/question/store" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
        <div class="form-group">
            <label for="datasetName">Give A Title</label>
            <input type="text" class="form-control" id="" name="title" required>
        </div>
        <div class="form-group">
            <label for="inputState">Select Category</label>
            <select name="category_id" id="inputState" class="form-control" required>
                <option value="" selected>Choose...</option>
                @foreach ($questionCategories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <textarea name="description" id="description" class="form-control"  cols="30" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection