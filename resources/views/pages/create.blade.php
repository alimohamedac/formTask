@extends('layouts.default')

@section('title', 'Create Inspection')

@section('header')
    <h1>Create a New Inspection</h1>
@endsection

@section('content')
    <form action="{{ route('inspections.store') }}" method="POST" data-parsley-validate="true" name="form" enctype="multipart/form-data" accept-charset="UTF-8">
        @csrf

        <label for="work_order_no">{{ __('messages.work_order_no') }}:</label>
        <input type="text" name="work_order_no" id="work_order_no" required>
        <br>

        <label for="date">{{ __('messages.date') }}:</label>
        <input type="date" name="date" id="date" required>
        <br>

        <label for="customer_name">{{ __('messages.customer_name') }}:</label>
        <input type="text" name="customer_name" id="customer_name" required>
        <br>

        <label for="project">{{ __('messages.project') }}:</label>
        <input type="text" name="project" id="project" required>
        <br>

        <label for="shape">{{ __('messages.shape') }}:</label>
        <select name="shape" id="shape" required>
            <option value="circle">Circle</option>
            <option value="square">Square</option>
            <option value="rectangle">Rectangle</option>
            <option value="custom">Custom</option>
        </select>
        <br>

        <h3>{{ __('messages.inspection_parameters') }}</h3>
        @foreach(['visual_check', 'color_match', 'coating_thickness', 'bad_packaging', 'bad_sealing', 'before_paint', 'after_paint', 'bad_fabrication', 'bad_finish', 'surface_scratches'] as $check)
            <label for="{{ $check }}">{{ __('messages.' . $check) }}:</label>
            <input type="checkbox" name="{{ $check }}" id="{{ $check }}">
            <br>
        @endforeach

        <h3>{{ __('messages.dimensions') }}</h3>
        @foreach(['face_size', 'neck_size', 'thickness_tolerance', 'angle_tolerance', 'joint_gap'] as $dimension)
            <label for="{{ $dimension }}">{{ __('messages.' . $dimension) }}:</label>
            <input type="text" name="{{ $dimension }}" id="{{ $dimension }}">
            <br>
        @endforeach

        <h3>{{ __('messages.approval') }}</h3>
        @foreach(['approved_by', 'inspector_name', 'inspection_date', 'signature'] as $approvalField)
            <label for="{{ $approvalField }}">{{ __('messages.' . $approvalField) }}:</label>
            <input type="text" name="{{ $approvalField }}" id="{{ $approvalField }}">
            <br>
        @endforeach

        <button type="submit">{{ __('messages.save') }}</button>
    </form>
@endsection
