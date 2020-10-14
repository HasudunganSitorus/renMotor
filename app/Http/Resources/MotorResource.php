<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MotorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return 
        [
            'id' => $this->id,
            'nama' => $this->nama,
            'noPlat' => $this->noPlat,
            'kondisi' => $this->kondisi,
            'avatar' =>$this->avatar,
            'created_at' =>(string)$this->created_at,
            'updated_at' =>(string)$this->updated_at,
    ];
    }
}
