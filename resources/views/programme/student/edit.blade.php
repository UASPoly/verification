
<div class="modal fade" id="certificate_{{$student->id}}" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
               
                <img src="{{$student->certificate->certificateImage() ?? ' '}}" alt=""></h5>
               
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" action="{{route('programme.student.certificate.update',[$student->certificate->id])}}" method="post">
                    @csrf
                    <div class="form-group row">
                        <div class="col-md-4"><label for="">Change Certificate</label></div>
                        <div class="col-md-8">
                            <input type="file" name="certificate" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4"><label for="">Certificate No</label></div>
                        <div class="col-md-8">
                            <input type="text" value="{{$student->certificate->certificate_no}}" placeholder="Enter Certificate No" name="certificate_no" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-4"><label for="">Date Issued</label></div>
                        <div class="col-md-8">
                            <input type="date" placeholder="Enter Certificate No" name="date_issued" value="{{$student->certificate->date_issued}}" class="form-control">
                        </div>
                    </div>
                    
                    <button class="btn btn-secondary">UPDATE CERTIFICATE</button>
                    
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>