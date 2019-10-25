<?php

namespace App\Http\Requests;

use App\Mahasiswa;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreMahasiswaRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('mahasiswa_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'nama' => [
                'required',
            ],
            'nim'  => [
                'required',
                'unique:mahasiswas',
            ],
        ];
    }
}
