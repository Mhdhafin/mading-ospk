<?php

namespace App\Http\Requests;

use App\Http\Middleware\superAdmin;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StorePostsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if (!Gate::any(['postsAdmin', 'superAdmin'])) {
            return false;
        } else {
            return true;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:4|unique:posts',
            'slug' => 'nullable',
            'author' => 'required|min:4',
            'content' => 'required',
            'image' => 'nullable|image|file'
        ];
    }
}
