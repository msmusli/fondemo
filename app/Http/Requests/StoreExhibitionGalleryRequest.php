<?php

namespace App\Http\Requests;

use App\ExhibitionGallery;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreExhibitionGalleryRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('exhibition_gallery_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'exhibition_category_id' => [
                'required',
                'integer'],
        ];
    }
}
