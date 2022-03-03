<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $certificate->certificate_no }} Information
        </h2>
    </x-slot>


<div class="row">
    <div class="col-md-9">
        <img src="{{$certificate->certificateImage()}}" alt=""height="800" with="600">
    </div>
    <div class="col-md-3">
    <table class="table">
    <tr>
        <td width="300"><b>Student Name: </b></td>
        <td>{{$certificate->student->name}}</td>
    </tr>
    <tr>
        <td width="300"><b>Student Date of Birth: </b></td>
        <td>{{$certificate->student->date_of_birth}}</td>
    </tr>
    <tr>
        <td width="300"><b>Certificate No: </b></td>
        <td>{{$certificate->certificate_no}}</td>
    </tr>
    <tr>
        <td width="300"><b>Date Issued: </b></td>
        <td>{{$certificate->date_issued}}</td>
    </tr>

    <tr>
        <td width="300"><b>Programme Studied: </b></td>
        <td>{{$certificate->student->programme->name}}</td>
    </tr>

    <tr>
        <td width="300"><b>Department: </b></td>
        <td>{{$certificate->student->programme->department->name}}</td>
    </tr>

    <tr>
        <td width="300"><b>College: </b></td>
        <td>{{$certificate->student->programme->department->college->name}}</td>
    </tr>
    </table>
    </div>
</div>   
</x-app-layout>
