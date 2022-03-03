
<div class="modal fade" id="student_{{$student->id}}" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" action="{{route('programme.student.certificate',[$student->id])}}" method="post">
                    @csrf
                    <div class="form-group row">
                        <input type="hidden" name="student_id" value="{{$student->id}}">
                        <div class="col-md-4"><label for="">Certificate</label></div>
                        <div class="col-md-8">
                            <input type="file" name="certificate" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4"><label for="">Certificate No</label></div>
                        <div class="col-md-8">
                            <input type="text" placeholder="Enter Certificate No" name="certificate_no" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-4"><label for="">Date Issued</label></div>
                        <div class="col-md-8">
                            <input type="date" placeholder="Enter Certificate No" name="date_issued" class="form-control">
                        </div>
                    </div>
                    
                    <button class="btn btn-secondary">UPLOAD CERTIFICATE</button>
                    
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>