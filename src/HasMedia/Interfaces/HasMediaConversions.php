<?php

namespace Spatie\MediaLibrary\HasMedia\Interfaces;

use Spatie\MediaLibrary\Media;

interface HasMediaConversions extends HasMedia
{

    /**
     * Register the conversions that should be performed.
     *
     * @param Media $media The Media Model, base for the conversions
     *
     * @return array
     */
    public function registerMediaConversions(Media $media = null);
}
