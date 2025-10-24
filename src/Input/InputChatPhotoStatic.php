<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A static photo in JPEG format.
 */
class InputChatPhotoStatic extends InputChatPhoto
{
    public const string TYPE_NAME = 'inputChatPhotoStatic';

    public function __construct(
        /**
         * Photo to be set as profile photo. Only inputFileLocal and inputFileGenerated are allowed.
         */
        protected InputFile $photo
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputChatPhotoStatic
    {
        return new static(
            TdSchemaRegistry::fromArray($array['photo']),
        );
    }

    public function getPhoto(): InputFile
    {
        return $this->photo;
    }

    public function setPhoto(InputFile $value): static
    {
        $this->photo = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'photo' => $this->photo->typeSerialize(),
        ];
    }
}
