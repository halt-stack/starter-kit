<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;

abstract class BaseRequest extends FormRequest
{
    /**
     * Get the name of the blade template file to be used by the view.
     *
     * @return string The name of the blade template file in dot notation (e.g. 'components.user-form').
     */
    abstract protected function getTemplateName(): string;

    /**
     * Handle a failed validation attempt.
     *
     * @param \Illuminate\Contracts\Validation\Validator $validator Request Validator
     *
     * @throws \Illuminate\Http\Exceptions\HttpResponseException
     */
    protected function failedValidation(Validator $validator): void
    {
        $response = Request::header('HX-Request')
            ? response(view($this->getTemplateName())->withErrors($validator)->render())
            : parent::failedValidation($validator);

        throw new HttpResponseException($response);
    }
}
