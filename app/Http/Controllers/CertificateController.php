<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certificate;

class CertificateController extends Controller
{
    public function search(Request $request)
    {
        $certificate = Certificate::where('certificate_no',$request->certificate_no)->first();
        if($certificate){
            return redirect()->route('certificate.view',[$certificate->id]);
        }else{
            return redirect()->route('welcome');
        }
    }

    public function view($certificateId)
    {
        return view('programme.student.certificate',[
            'certificate'=>Certificate::find($certificateId)
            ]);
    }
}
