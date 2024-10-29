@extends('layouts.default')

@section('title', __('messages.inspections_list'))

@section('header')
    <h1>{{ __('messages.inspections_list') }}</h1>
@endsection

@section('content')
    <a href="{{ route('inspections.create') }}" class="btn btn-primary mb-3">{{ __('messages.create_inspection') }}</a>

    @if ($inspections->isEmpty())
        <p>{{ __('messages.no_inspections_found') }}</p>
    @else
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>{{ __('messages.work_order_no') }}</th>
                <th>{{ __('messages.date') }}</th>
                <th>{{ __('messages.customer_name') }}</th>
                <th>{{ __('messages.project') }}</th>
                <th>{{ __('messages.shape') }}</th>
                <th>{{ __('messages.actions') }}</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($inspections as $inspection)
                <tr>
                    <td>{{ $inspection->work_order_no }}</td>
                    <td>{{ $inspection->date->format('Y-m-d') }}</td>
                    <td>{{ $inspection->customer_name }}</td>
                    <td>{{ $inspection->project }}</td>
                    <td>{{ ucfirst($inspection->shape) }}</td>
                    <td>
                        <a href="{{ route('inspections.show', $inspection->id) }}" class="btn btn-info btn-sm">{{ __('messages.view') }}</a>
                        <a href="{{ route('inspections.edit', $inspection->id) }}" class="btn btn-warning btn-sm">{{ __('messages.edit') }}</a>
                        <form action="{{ route('inspections.destroy', $inspection->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('{{ __('messages.confirm_delete') }}')">{{ __('messages.delete') }}</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <!-- Pagination Links -->
        <div class="d-flex justify-content-center">
            {{ $inspections->links() }}
        </div>
    @endif
@endsection
