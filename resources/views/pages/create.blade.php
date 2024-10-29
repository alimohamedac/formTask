@extends('layouts.default')

@section('title', 'Create Inspection')

@section('header')
    <h1>Create a New Inspection</h1>
@endsection

@section('content')
    <form action="{{ route('inspections.store') }}" method="POST">
        @csrf
        <label for="work_order_no">{{ __('messages.work_order_no') }}:</label>
        <input type="text" name="work_order_no" id="work_order_no" required>

        <label for="date">{{ __('messages.date') }}:</label>
        <input type="date" name="date" id="date" required>

        <label for="customer_name">{{ __('messages.customer_name') }}:</label>
        <input type="text" name="customer_name" id="customer_name" required>

        <label for="project">{{ __('messages.project') }}:</label>
        <input type="text" name="project" id="project" required>

        <label for="shape">{{ __('messages.shape') }}:</label>
        <select name="shape" id="shape">
            <option value="circle">Circle</option>
            <option value="square">Square</option>
            <option value="rectangle">Rectangle</option>
            <option value="custom">Custom</option>
        </select>

        <h3>{{ __('messages.inspection_parameters') }}</h3>

        <label for="visual_check">{{ __('messages.visual_check') }}:</label>
        <input type="checkbox" name="visual_check" id="visual_check">

        <label for="color_match">{{ __('messages.color_match') }}:</label>
        <input type="checkbox" name="color_match" id="color_match">

        <label for="coating_thickness">{{ __('messages.coating_thickness') }}:</label>
        <input type="checkbox" name="coating_thickness" id="coating_thickness">

        <label for="bad_packaging">{{ __('messages.bad_packaging') }}:</label>
        <input type="checkbox" name="bad_packaging" id="bad_packaging">

        <label for="bad_sealing">{{ __('messages.bad_sealing') }}:</label>
        <input type="checkbox" name="bad_sealing" id="bad_sealing">

        <!-- Other Checks (Before Paint, After Paint) -->
        <label for="before_paint">{{ __('messages.before_paint') }}:</label>
        <input type="checkbox" name="before_paint" id="before_paint">

        <label for="after_paint">{{ __('messages.after_paint') }}:</label>
        <input type="checkbox" name="after_paint" id="after_paint">

        <label for="bad_fabrication">{{ __('messages.bad_fabrication') }}:</label>
        <input type="checkbox" name="bad_fabrication" id="bad_fabrication">

        <label for="bad_finish">{{ __('messages.bad_finish') }}:</label>
        <input type="checkbox" name="bad_finish" id="bad_finish">

        <label for="face_size">{{ __('messages.face_size') }}:</label>
        <input type="text" name="face_size" id="face_size">

        <label for="neck_size">{{ __('messages.neck_size') }}:</label>
        <input type="text" name="neck_size" id="neck_size">

        <label for="thickness_tolerance">{{ __('messages.thickness_tolerance') }}:</label>
        <input type="text" name="thickness_tolerance" id="thickness_tolerance">

        <label for="angle_tolerance">{{ __('messages.angle_tolerance') }}:</label>
        <input type="text" name="angle_tolerance" id="angle_tolerance">

        <label for="joint_gap">{{ __('messages.joint_gap') }}:</label>
        <input type="text" name="joint_gap" id="joint_gap">

        <label for="surface_scratches">{{ __('messages.surface_scratches') }}:</label>
        <input type="checkbox" name="surface_scratches" id="surface_scratches">

        <!-- Approval Section -->
        <h3>{{ __('messages.approval') }}</h3>

        <label for="approved_by">{{ __('messages.approved_by') }}:</label>
        <input type="text" name="approved_by" id="approved_by">

        <label for="inspector_name">{{ __('messages.inspector_name') }}:</label>
        <input type="text" name="inspector_name" id="inspector_name">

        <label for="inspection_date">{{ __('messages.inspection_date') }}:</label>
        <input type="date" name="inspection_date" id="inspection_date">

        <label for="signature">{{ __('messages.signature') }}:</label>
        <input type="text" name="signature" id="signature">

        <button type="submit">{{ __('messages.save') }}</button>
    </form>
@endsection
