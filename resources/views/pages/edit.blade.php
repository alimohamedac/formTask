@extends('layouts.default')

@section('title', __('messages.edit_inspection'))

@section('header')
    <h1>{{ __('messages.edit_inspection') }}</h1>
@endsection

@section('content')
    <form action="{{ route('inspections.update', $inspection->id) }}" method="POST">
    @csrf
    @method('PUT')

        <label for="work_order_no">{{ __('messages.work_order_no') }}:</label>
        <input type="text" name="work_order_no" id="work_order_no" value="{{ old('work_order_no', $inspection->work_order_no) }}" required>

        <label for="date">{{ __('messages.date') }}:</label>
        <input type="date" name="date" id="date" value="{{ old('date', $inspection->date->format('Y-m-d')) }}" required>

        <label for="customer_name">{{ __('messages.customer_name') }}:</label>
        <input type="text" name="customer_name" id="customer_name" value="{{ old('customer_name', $inspection->customer_name) }}" required>

        <label for="project">{{ __('messages.project') }}:</label>
        <input type="text" name="project" id="project" value="{{ old('project', $inspection->project) }}" required>

        <label for="shape">{{ __('messages.shape') }}:</label>
        <select name="shape" id="shape">
            <option value="circle" {{ old('shape', $inspection->shape) == 'circle' ? 'selected' : '' }}>Circle</option>
            <option value="square" {{ old('shape', $inspection->shape) == 'square' ? 'selected' : '' }}>Square</option>
            <option value="rectangle" {{ old('shape', $inspection->shape) == 'rectangle' ? 'selected' : '' }}>Rectangle</option>
            <option value="custom" {{ old('shape', $inspection->shape) == 'custom' ? 'selected' : '' }}>Custom</option>
        </select>

        <h3>{{ __('messages.inspection_parameters') }}</h3>

        <label for="visual_check">{{ __('messages.visual_check') }}:</label>
        <input type="checkbox" name="visual_check" id="visual_check" {{ old('visual_check', $inspection->visual_check) ? 'checked' : '' }}>

        <label for="color_match">{{ __('messages.color_match') }}:</label>
        <input type="checkbox" name="color_match" id="color_match" {{ old('color_match', $inspection->color_match) ? 'checked' : '' }}>

        <label for="coating_thickness">{{ __('messages.coating_thickness') }}:</label>
        <input type="checkbox" name="coating_thickness" id="coating_thickness" {{ old('coating_thickness', $inspection->coating_thickness) ? 'checked' : '' }}>

        <label for="bad_packaging">{{ __('messages.bad_packaging') }}:</label>
        <input type="checkbox" name="bad_packaging" id="bad_packaging" {{ old('bad_packaging', $inspection->bad_packaging) ? 'checked' : '' }}>

        <label for="bad_sealing">{{ __('messages.bad_sealing') }}:</label>
        <input type="checkbox" name="bad_sealing" id="bad_sealing" {{ old('bad_sealing', $inspection->bad_sealing) ? 'checked' : '' }}>

        <label for="before_paint">{{ __('messages.before_paint') }}:</label>
        <input type="checkbox" name="before_paint" id="before_paint" {{ old('before_paint', $inspection->before_paint) ? 'checked' : '' }}>

        <label for="after_paint">{{ __('messages.after_paint') }}:</label>
        <input type="checkbox" name="after_paint" id="after_paint" {{ old('after_paint', $inspection->after_paint) ? 'checked' : '' }}>

        <label for="bad_fabrication">{{ __('messages.bad_fabrication') }}:</label>
        <input type="checkbox" name="bad_fabrication" id="bad_fabrication" {{ old('bad_fabrication', $inspection->bad_fabrication) ? 'checked' : '' }}>

        <label for="bad_finish">{{ __('messages.bad_finish') }}:</label>
        <input type="checkbox" name="bad_finish" id="bad_finish" {{ old('bad_finish', $inspection->bad_finish) ? 'checked' : '' }}>

        <label for="face_size">{{ __('messages.face_size') }}:</label>
        <input type="text" name="face_size" id="face_size" value="{{ old('face_size', $inspection->face_size) }}">

        <label for="neck_size">{{ __('messages.neck_size') }}:</label>
        <input type="text" name="neck_size" id="neck_size" value="{{ old('neck_size', $inspection->neck_size) }}">

        <label for="thickness_tolerance">{{ __('messages.thickness_tolerance') }}:</label>
        <input type="text" name="thickness_tolerance" id="thickness_tolerance" value="{{ old('thickness_tolerance', $inspection->thickness_tolerance) }}">

        <label for="angle_tolerance">{{ __('messages.angle_tolerance') }}:</label>
        <input type="text" name="angle_tolerance" id="angle_tolerance" value="{{ old('angle_tolerance', $inspection->angle_tolerance) }}">

        <label for="joint_gap">{{ __('messages.joint_gap') }}:</label>
        <input type="text" name="joint_gap" id="joint_gap" value="{{ old('joint_gap', $inspection->joint_gap) }}">

        <label for="surface_scratches">{{ __('messages.surface_scratches') }}:</label>
        <input type="checkbox" name="surface_scratches" id="surface_scratches" {{ old('surface_scratches', $inspection->surface_scratches) ? 'checked' : '' }}>

        <h3>{{ __('messages.approval') }}</h3>

        <label for="approved_by">{{ __('messages.approved_by') }}:</label>
        <input type="text" name="approved_by" id="approved_by" value="{{ old('approved_by', $inspection->approved_by) }}">

        <label for="inspector_name">{{ __('messages.inspector_name') }}:</label>
        <input type="text" name="inspector_name" id="inspector_name" value="{{ old('inspector_name', $inspection->inspector_name) }}">

        <label for="inspection_date">{{ __('messages.inspection_date') }}:</label>
        <input type="date" name="inspection_date" id="inspection_date" value="{{ old('inspection_date', $inspection->inspection_date->format('Y-m-d')) }}">

        <label for="signature">{{ __('messages.signature') }}:</label>
        <input type="text" name="signature" id="signature" value="{{ old('signature', $inspection->signature) }}">

        <button type="submit">{{ __('messages.update') }}</button>
    </form>
@endsection
