@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.create') }} {{ trans('cruds.digitalBrochure.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.digital-brochures.store") }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            <label for="name">{{ trans('cruds.digitalBrochure.fields.name') }}</label>
                            <input class="form-control" type="text" name="name" id="name" value="{{ old('name', '') }}">
                            @if($errors->has('name'))
                                <span class="help-block" role="alert">{{ $errors->first('name') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.digitalBrochure.fields.name_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('digitalphoto') ? 'has-error' : '' }}">
                            <label for="digitalphoto">digitalphoto</label>
                            <div class="needsclick dropzone" id="digitalphoto-dropzone">
                            </div>
                            @if($errors->has('digitalphoto'))
                                <span class="help-block" role="alert">{{ $errors->first('digitalphoto') }}</span>
                            @endif
                            
                        </div>
                        <div class="form-group {{ $errors->has('pdf') ? 'has-error' : '' }}">
                            <label for="pdf">{{ trans('cruds.digitalBrochure.fields.pdf') }}</label>
                            <div class="needsclick dropzone" id="pdf-dropzone">
                            </div>
                            @if($errors->has('pdf'))
                                <span class="help-block" role="alert">{{ $errors->first('pdf') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.digitalBrochure.fields.pdf_helper') }}</span>
                        </div>
                        <div class="form-group">
                                <label for="published_at">Published_at</label>
                                <input class="form-control date {{ $errors->has('published_at') ? 'is-invalid' : '' }}" type="text"
                                    name="published_at" id="published_at" value="{{ old('published_at') }}" required>
                                @if($errors->has(''))
                                <span class="text-danger">{{ $errors->first('') }}</span>
                                @endif
                                <span class="help-block"></span>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    Dropzone.options.pdfDropzone = {
    url: '{{ route('admin.digital-brochures.storeMedia') }}',
    maxFilesize: 1000, // MB
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 1000
    },
    success: function (file, response) {
      $('form').find('input[name="pdf"]').remove()
      $('form').append('<input type="hidden" name="pdf" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="pdf"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($digitalBrochure) && $digitalBrochure->pdf)
      var file = {!! json_encode($digitalBrochure->pdf) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="pdf" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
<script>
    Dropzone.options.digitalphotoDropzone = {
    url: '{{ route('admin.digital-brochures.storeMedia') }}',
    maxFilesize: 125, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 125,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="digitalphoto"]').remove()
      $('form').append('<input type="hidden" name="digitalphoto" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="digitalphoto"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($digitalphoto) && $digitalphoto->digitalphoto)
      var file = {!! json_encode($digitalphoto->digitalphoto) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, '{{ $digitalphoto->digitalphoto->getUrl('thumb') }}')
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="digitalphoto" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}
</script>
@endsection