<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CucuResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'    => $this->id,
            'nama' =>$this->nama,
            'jenisKelamin' =>$this->jenisKelamin,
            'ortu_id' =>$this->ortu_id

        ];
    }
}
