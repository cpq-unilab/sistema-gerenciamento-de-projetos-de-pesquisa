<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Notice extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'year',
        'code',
        'description',
        'submission_start',
        'submission_end',
        'submission_appeal_start',
        'submission_appeal_end',
        'evaluation_start',
        'evaluation_end',
        'evaluation_appeal_start',
        'evaluation_appeal_end',
        'execution_start',
        'execution_end',
        'continuous_flow',
        'file_path',
        'archived',
    ];

    public function submissionStart(): Attribute
    {
        return new Attribute(
            get: fn ($value) => $value,
            set: fn ($value) => Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d')
        );
    }

    public function submissionEnd(): Attribute
    {
        return new Attribute(
            get: fn ($value) => $value,
            set: fn ($value) => Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d')
        );
    }

    public function submissionAppealStart(): Attribute
    {
        return new Attribute(
            get: fn ($value) => $value,
            set: fn ($value) => Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d')
        );
    }

    public function submissionAppealEnd(): Attribute
    {
        return new Attribute(
            get: fn ($value) => $value,
            set: fn ($value) => Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d')
        );
    }

    public function evaluationStart(): Attribute
    {
        return new Attribute(
            get: fn ($value) => $value,
            set: fn ($value) => Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d')
        );
    }

    public function evaluationEnd(): Attribute
    {
        return new Attribute(
            get: fn ($value) => $value,
            set: fn ($value) => Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d')
        );
    }

    public function evaluationAppealStart(): Attribute
    {
        return new Attribute(
            get: fn ($value) => $value,
            set: fn ($value) => Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d')
        );
    }

    public function evaluationAppealEnd(): Attribute
    {
        return new Attribute(
            get: fn ($value) => $value,
            set: fn ($value) => Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d')
        );
    }

    public function executionStart(): Attribute
    {
        return new Attribute(
            get: fn ($value) => $value,
            set: fn ($value) => Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d')
        );
    }

    public function executionEnd(): Attribute
    {
        return new Attribute(
            get: fn ($value) => $value,
            set: fn ($value) => Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d')
        );
    }
}
