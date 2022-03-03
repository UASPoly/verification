<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

@foreach(App\Models\Department::all() as $department)
<div class="card">
    <div class="card-body">
        <div class="card-header">{{$department->name}} Certificate Records</div>
        <br>
        <div class="row">
            @foreach($department->programmes as $programme)
                <div class="col-md-6">
                    <a href="{{route('programme.students',[$programme->id])}}">
                        <div class="card shadow">
                            <div class="card-body">
                                <h4 class="text text-success text-center">{{$programme->name}} {{$programme->certificates()}} CERTIFICATES</h4>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
<br>
@endforeach
</x-app-layout>
