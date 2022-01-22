<?php

namespace JaysonDev\Teletant\Entities;


use JaysonDev\Teletant\Entities\Base\Entity;

class UserProfilePhotos extends Entity
{
    public function totalCount(): ?int
    {
        return parent::_data('total_count');
    }

    /**
     * @return PhotoSize[][]
     */
    public function photos(): array
    {
        $photos = parent::_data('photos');
        if (!is_null($photos)) {
            foreach ($photos as $aopKey => $arrayOfPhotos) {
                foreach ($arrayOfPhotos as $key => $photo) {
                    $arrayOfPhotos[$key] = new PhotoSize($photo);
                }
                $photos[$aopKey] = $arrayOfPhotos;
            }
            return $photos;
        }
        return [[]];
    }
}