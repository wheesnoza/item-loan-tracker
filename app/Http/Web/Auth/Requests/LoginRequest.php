<?php

namespace App\Http\Web\Auth\Requests;

use App\Core\Auth\Data\CredentialsData;
use Illuminate\Foundation\Http\FormRequest;
use Spatie\LaravelData\WithData;

class LoginRequest extends FormRequest
{
    /**
     * @use WithData<CredentialsData>
     */
    use WithData;

    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string,array<mixed>>
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'email'],
            'password' => ['required'],
        ];
    }

    protected function dataClass(): string
    {
        return CredentialsData::class;
    }

    public function credentials(): CredentialsData
    {
        return $this->getData();
    }
}
