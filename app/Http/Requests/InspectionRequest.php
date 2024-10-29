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
            'color_match' => 'boolean',
            'coating_thickness' => 'boolean',
            'bad_packaging' => 'boolean',
            'bad_sealing' => 'boolean',
            'before_paint' => 'boolean',
            'after_paint' => 'boolean',
            'bad_fabrication' => 'boolean',
            'bad_finish' => 'boolean',
            'surface_scratches' => 'boolean',
            'approved_by' => 'nullable|string|max:255',
            'inspector_name' => 'nullable|string|max:255',
            'inspection_date' => 'nullable|date',
            'signature' => 'nullable|string|max:255',
        ];
    }
}
