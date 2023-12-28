<?php

namespace App\Http\Requests\Products;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use App\Models\Category;

class CreateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'product_company' => ['required', 'string', 'max:50'],
            'product_name' => ['required', 'string', 'max:255'],
            'description' => ['string', 'max:255'],
            'price' => ['required', 'numeric'],
            'quantity' => ['required', 'numeric'],
            'category_id' => ['required', 'numeric'],
            'product_img' => ['required', 'file', 'mimes:jpeg,png,jpg,gif,svg', 'max:10240'],
        ];
    }

    public function withValidator(Validator $validator)
    {
        $validator->after(function ($validator) {
            $category_id = $this->category_id;
            $isExists = Category::where('id', $category_id)->exists();
            if (!$isExists) {
                $validator->errors()->add(
                    'category_id',
                    'Category not found'
                );
            }
        });
    }
}
