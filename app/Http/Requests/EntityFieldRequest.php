<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EntityFieldRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        // $sql_field_types = [
        //     "int",
        //     "varchar",
        //     "text",
        //     "date",
        //     "datetime",
        //     "timestamp",
        //     "time",
        //     "year",
        //     "tinyint",
        //     "smallint",
        //     "mediumint",
        //     "bigint",
        //     "decimal",
        //     "float",
        //     "double",
        //     "bit",
        //     "boolean",
        //     "serial",
        //     "blob",
        //     "tinyblob",
        //     "mediumblob",
        //     "longblob",
        //     "enum",
        //     "set",
        //     "json",
        // ];

        return [
            'name' => 'required',
            'type' => 'required',
            // 'type' => 'required|in_array:' . implode(',', $sql_field_types),            
        ];
    }
}
