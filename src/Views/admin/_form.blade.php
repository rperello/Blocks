@section('js')
    <script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
    <script src="{{ asset('js/admin/form.js') }}"></script>
@stop

@include('core::admin._buttons-form')

{!! BootForm::hidden('id') !!}

{!! BootForm::text(trans('labels.name'), 'name') !!}

@include('core::admin._tabs-lang-form', ['target' => 'content'])

<div class="tab-content">

@foreach ($locales as $lang)

    <div class="tab-pane fade @if($locale == $lang)in active @endif" id="content-{{ $lang }}">
        {!! BootForm::checkbox(trans('labels.online'), $lang.'[status]') !!}
        {!! BootForm::textarea(trans('labels.body'), $lang.'[body]')->addClass('editor') !!}
    </div>

@endforeach

</div>
