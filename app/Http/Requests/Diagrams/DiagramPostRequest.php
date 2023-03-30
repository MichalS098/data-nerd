<?php

declare(strict_types=1);

namespace App\Http\Requests\Diagrams;

use Illuminate\Foundation\Http\FormRequest;

final class DiagramPostRequest extends FormRequest
{    
    public function authorize(): bool
    {
        return true;
    }
    
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',                        
            'user_id' => 'required|integer|exists:users,id',
        ];
    }
}
