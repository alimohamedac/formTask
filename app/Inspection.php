<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inspection extends Model
{
    protected $fillable = [
        'work_order_no',
        'date',
        'customer_name',
        'project',
        'shape',
        'visual_check',
        'color_match',
        'coating_thickness',
        'bad_packaging',
        'bad_sealing',
        'before_paint',
        'after_paint',
        'bad_fabrication',
        'bad_finish',
        'face_size',
        'neck_size',
        'thickness_tolerance',
        'angle_tolerance',
        'joint_gap',
        'surface_scratches',
        'approved_by',
        'inspector_name',
        'inspection_date',
        'signature',
    ];

    protected $casts = [
        'date' => 'date',
        'inspection_date' => 'date',
        //'shape' => 'array',
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
    ];

    public function getFormattedInspectionDateAttribute()
    {
        return $this->inspection_date ? $this->inspection_date->format('d-m-Y') : null;
    }

    public function scopeApproved($query)
    {
        return $query->whereNotNull('approved_by');
    }

    public function isApproved(): bool
    {
        return !is_null($this->approved_by);
    }
}
