<?php

namespace App\Http\Requests;

use App\Enum\ShapeType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class InspectionRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'work_order_no' => 'required|string|max:255',
            'date'          => 'required|date',
            'customer_name' => 'required|string|max:255',
            'project'       => 'required|string|max:255',
            'shape'         => [
                'required',
                Rule::in([ShapeType::Circle, ShapeType::Custom, ShapeType::Rectangle, ShapeType::Square])
            ],
            'visual_check' => 'boolean',
            'color_match'  => 'boolean',
            'coating_thickness' => 'boolean',
        ];
    }

    public function attributes()
    {
        return [
            'work_order_no' => __('messages.work_order_no'),
            'date'          => __('messages.date'),
            'customer_name' => __('messages.customer_name'),
            'project'       => __('messages.project'),
            'shape'         => __('messages.shape'),
        ];
    }
}
