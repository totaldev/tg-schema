<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A static photo in JPEG format
 */
class InputChatPhotoStatic extends InputChatPhoto
{
    public const TYPE_NAME = 'inputChatPhotoStatic';

    /**
     * Photo to be set as profile photo. Only inputFileLocal and inputFileGenerated are allowed
     *
     * @var InputFile
     */
    protected InputFile $photo;

    public function __construct(InputFile $photo)
    {
        parent::__construct();

        $this->photo = $photo;
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'photo' => $this->photo->typeSerialize(),
        ];
    }
}
