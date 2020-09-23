<?php

namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\JsonResource;

class PemesananResource extends JsonResource
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
            'id' =>$this->id,
            'jumlah' => $this->jumlah,
            'motor_id'=>$this->motor_id,
            'durasi' =>$this->durasi
        ];
    }
}
