<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $programme->name }} Students
        </h2>
    </x-slot>


<table class="table">
<thead>
    <tr>
        <th>S/N</th>
        <th>NAME</th>
        <th>DATE OF BIRTH</th>
        <th>CERTIFICATE</th>
        <th>CERTIFICATE NO</th>
        <th></th>
    </tr>
</thead>
    <tbody>
        @foreach($programme->students as $student)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->date_of_birth}}</td>
                <td>
                @if($student->certificate)
                    <img src="{{$student->certificate->certificateImage()}}" alt="">
                @endif
                </td>
                <td>{{$student->certificate->certificate_no ?? ' '}}</td>
                <td>
                @if($student->certificate)
                <button data-toggle="modal" data-target="#certificate_{{$student->id}}" class="btn btn-warning">Edit Certificate</button>
                @else
                <button data-toggle="modal" data-target="#student_{{$student->id}}" class="btn btn-info">Upload Certificate</button>
                @endif
                </td>
            </tr>
            @if($student->certificate)
                @include('programme.student.edit')
            @endif
            
            @include('programme.student.upload')
        @endforeach
    </tbody>
</table>   
</x-app-layout>
