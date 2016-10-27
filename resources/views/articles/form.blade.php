@include('errors.list')

<div class="field-title">
    {!! Form::text('title', null,  ['placeholder' => 'Title']) !!}
    <p class="help-block"></p>
</div>

<div class="field-short_description">
    {!! Form::textarea('short_description', null, ['placeholder' => 'Short description', 'rows' => 2]) !!}
    <p class="help-block"></p>
</div>

<div class="field-description">
    {!! Form::textarea('description', null) !!}
    <p class="help-block"></p>
</div>

<div class="field-category_id">
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
    <p class="help-block"></p>
</div>

<div class="field-tags_id">
    {!! Form::select('tags_id[]', $tags, null, ['multiple' => 'multiple']) !!}
    <p class="help-block"></p>
</div>

<div class="form-group">
    <button type="submit" class="button yellow"><i class="icon-ok"></i> {!! $submitButtonText !!}</button>
</div>

@section('styles')
    @parent
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
    <link href="/css/redactor.css" rel="stylesheet" />
@stop

@section('scripts')
    <script type="text/javascript" src="/js/articles.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
    <script src="/js/imperavi/redactor.min.js"></script>
    <script src="/js/imperavi/lang/ru.js"></script>
    <script src="/js/imperavi/plugins/imagemanager/imagemanager.js"></script>
    <script src="/js/imperavi/plugins/fullscreen/fullscreen.js"></script>
    <script src="/js/imperavi/plugins/filemanager/filemanager.js"></script>
    <script>
        $(function() {
            $('.field-description textarea').redactor({
                minHeight: 400,
                imageUpload: "{!! url('/upload/imageUpload') !!}",
                imageManagerJson: "{!! url('/upload/imageManager') !!}",
                fileUpload: "{!! url('/upload/fileUpload') !!}",
                fileManagerJson: "{!! url('/upload/fileManager') !!}",
                plugins: ["imagemanager","fullscreen", "filemanager"]
            });

            $('.field-category_id select').select2({
                placeholder: 'Chose category'
            });
            $('.field-tags_id select').select2({
                placeholder: 'Chose tags',
                tags: true
            });
        });
    </script>
@stop