@extends('layouts.app')
@section('title', 'Employee')
@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            Details
        </div>
        <form action="{{ route('employee.status') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 form-group">
                        <label for="name" class="req_fld">Name</label>
                        <input class="form-control" type="text" disabled value="{{$emp->name}}">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="email" class="req_fld">Email</label>
                        <input class="form-control" type="text" disabled value="{{$emp->email}}" autocomplete="off">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="contact_no" class="req_fld">Contact Number</label>
                        <input class="form-control" type="text" disabled value="{{$emp->contact_no}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 form-group">
                        <label for="gender" class="req_fld">Gender</label>
                        <select id="gender" class="form-control" disabled>
                            <option>Please Select</option>
                            <option value="M" {{$emp->gender == "M" ? 'selected' : ''}}>Male</option>
                            <option value="F" {{$emp->gender == "F" ? 'selected' : ''}}>Female</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col">
                        <a href="{{ route('employee.index') }}" class="btn btn-info" type="button">Back</a>
                        <button class="btn btn-secondary" type="reset">Reset</button>
                        <input type="hidden" name="id" value="{{$emp->id}}">
                        @if ($emp->is_active)
                        <input type="hidden" name="is_active" value="0">
                        <button class="btn btn-danger float-right" type="submit">Deactivate Employee</button>
                        @else
                        <input type="hidden" name="is_active" value="1">
                        <button class="btn btn-primary float-right" type="submit">Activate Employee</button>
                        @endif
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection