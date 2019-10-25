<?php

namespace App\Http\Requests;

use App\Mahasiswa;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateMahasiswaRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('mahasiswa_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

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
                'unique:mahasiswas,nim,' . request()->route('mahasiswa')->id,
            ],
        ];
    }
}
