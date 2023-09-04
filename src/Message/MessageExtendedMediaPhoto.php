<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\Photo\Photo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The media is a photo
 */
class MessageExtendedMediaPhoto extends MessageExtendedMedia
{
    public const TYPE_NAME = 'messageExtendedMediaPhoto';

    /**
     * The photo
     *
     * @var Photo
     */
    protected Photo $photo;

    /**
     * Photo caption
     *
     * @var FormattedText
     */
    protected FormattedText $caption;

    public function __construct(Photo $photo, FormattedText $caption)
    {
        parent::__construct();

        $this->photo = $photo;
        $this->caption = $caption;
    }

    public static function fromArray(array $array): MessageExtendedMediaPhoto
    {
        return new static(
            TdSchemaRegistry::fromArray($array['photo']),
            TdSchemaRegistry::fromArray($array['caption']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'photo' => $this->photo->typeSerialize(),
            'caption' => $this->caption->typeSerialize(),
        ];
    }

    public function getPhoto(): Photo
    {
        return $this->photo;
    }

    public function getCaption(): FormattedText
    {
        return $this->caption;
    }
}
