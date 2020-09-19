@extends('layouts.dashboard.master')
@section('page_css')
<link href="{{asset("js/plugins/dropzone/dropzone.css")}}" rel="stylesheet">
<style>
    /* Dropzone */
    .dropzone {
        min-height: 230px !important;
        border: 2px dashed rgba(0, 0, 0, 0.3) !important;
        background: white !important;
        border-radius: 6px !important;
    }

    .dropzone .dz-message {
        font-size: 30px !important;
    }
</style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 col-md-10 col-sm-12 mr-auto ml-auto">
            <div class="card ">
                <div class="card-header ">
                    <h4 class="card-title text-center">upload new file</h4>
                </div>
                <div class="card-body">
                    {{-- file upload --}}
                    <form id="dropzoneForm" class="dropzone" method="POST"
                        enctype="multipart/form-data" action="{{route("files.upload")}}">
                        @csrf
                        <div class="fallback">
                            <input name="file" type="file" multiple />
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page_script')

<script src="{{asset("js/plugins/dropzone/dropzone.js")}}"></script>
<script type="text/javascript">
    Dropzone.options.dropzoneForm = {
    paramName: "file",
    // uploadMultiple: true,
    parallelUploads: 5,
    maxFilesize: 350,
    timeout:100000,
    addRemoveLinks: true,
    dictRemoveFile: 'Remove file',
    acceptedFiles : ".png,.jpg,.gif,.bmp,.jpeg,.pdf,",
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
  };
</script>
@endsection
