<!-- upload csv modal start -->
<div class="modal fade" id="upload-csv-modal" tabindex="-1" role="dialog" aria-labelledby="uploadCSV" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h4 class="modal-title" id="myModalLabel">Upload CSV File</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="dismiss_text_white">&times;</span>
                </button>
            </div>
            <form id="upload-rates-forms" action="{{route('rates.upload')}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('post')
                <div class="modal-body">
                    <div class="container">

                        <div class="form-group row">
                            <label for="rates_upload_file" class="col-sm-3 col-form-label">Upload CSV File</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="rates_upload_file" name="rates_upload_file" placeholder="Upload CSV File">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- upload csv modal end -->
@push('scripts')
    {!! JsValidator::formRequest(\App\Http\Requests\UploadRatesRequest::class, '#upload-rates-forms'); !!}
@endpush
