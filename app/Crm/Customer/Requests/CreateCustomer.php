<?php


namespace Crm\customer\Requests;


use Crm\Base\Requests\ApiRequest;
use Illuminate\Foundation\Http\FormRequest;

class CreateCustomer extends ApiRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3'
        ];
    }
}
