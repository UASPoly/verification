<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Programme;
use App\Models\Certificate;
use App\Services\Upload\FileUpload;

class ProgrammeController extends Controller
{
    use FileUpload;

    public function students($programmeId)
    {
        return view('programme.student.index',['programme'=>Programme::find($programmeId)]);
    }

    public function uploadCertificate (Request $request, $studentId)
    {
        $request->validate([
            'certificate_no'=>'required|unique:certificates',
            'certificate'=>'required',
            'date_issued'=>'required',
            ]);
        $student = Student::find($studentId);
        $certificate = $student->certificate()->create([
            'certificate_no'=>$request->certificate_no,
            'date_issued'=>$request->date_issued,
            ]);

        if($request->certificate){
            $this->storeFile($certificate,'image',$request->certificate,$student->programme->name.'/');
        }
        return redirect()->route('programme.students',[$student->programme->id]);
    }

    public function updateCertificate (Request $request, $certificateId)
    {
        
        $certificate = Certificate::find($certificateId);
        $certificate->update([
            'certificate_no'=>$request->certificate_no,
            'date_issued'=>$request->date_issued,
            ]);

        if($request->certificate){
            $this->updateFile($certificate,'image',$request->certificate,$certificate->student->programme->name.'/');
        }
        return redirect()->route('programme.students',[$certificate->student->programme->id]);
    }
}
