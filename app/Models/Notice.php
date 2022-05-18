<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Notice extends Model
{
    use HasFactory;

    public function submission_start(): Attribute
    {
        return new Attribute(
            get: fn ($value) => $value,
            set: fn ($value) => Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d')
        );
    }

    public function submission_end(): Attribute
    {
        return new Attribute(
            get: fn ($value) => $value,
            set: fn ($value) => Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d')
        );
    }

    public function submission_appeal_start(): Attribute
    {
        return new Attribute(
            get: fn ($value) => $value,
            set: fn ($value) => Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d')
        );
    }

    public function submission_appeal_end(): Attribute
    {
        return new Attribute(
            get: fn ($value) => $value,
            set: fn ($value) => Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d')
        );
    }

    public function evaluation_start(): Attribute
    {
        return new Attribute(
            get: fn ($value) => $value,
            set: fn ($value) => Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d')
        );
    }

    public function evaluation_end(): Attribute
    {
        return new Attribute(
            get: fn ($value) => $value,
            set: fn ($value) => Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d')
        );
    }

    public function evaluation_appeal_start(): Attribute
    {
        return new Attribute(
            get: fn ($value) => $value,
            set: fn ($value) => Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d')
        );
    }

    public function evaluation_appeal_end(): Attribute
    {
        return new Attribute(
            get: fn ($value) => $value,
            set: fn ($value) => Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d')
        );
    }

    public function execution_start(): Attribute
    {
        return new Attribute(
            get: fn ($value) => $value,
            set: fn ($value) => Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d')
        );
    }

    public function execution_end(): Attribute
    {
        return new Attribute(
            get: fn ($value) => $value,
            set: fn ($value) => Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d')
        );
    }
}
