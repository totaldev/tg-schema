<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\Photo\Photo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A photo message
 */
class MessagePhoto extends MessageContent
{
    public const TYPE_NAME = 'messagePhoto';

    /**
     * Photo caption
     *
     * @var FormattedText
     */
    protected FormattedText $caption;

    /**
     * True, if the photo preview must be covered by a spoiler animation
     *
     * @var bool
     */
    protected bool $hasSpoiler;

    /**
     * True, if the photo must be blurred and must be shown only while tapped
     *
     * @var bool
     */
    protected bool $isSecret;

    /**
     * The photo
     *
     * @var Photo
     */
    protected Photo $photo;

    public function __construct(Photo $photo, FormattedText $caption, bool $hasSpoiler, bool $isSecret)
    {
        parent::__construct();

        $this->photo = $photo;
        $this->caption = $caption;
        $this->hasSpoiler = $hasSpoiler;
        $this->isSecret = $isSecret;
    }

    public static function fromArray(array $array): MessagePhoto
    {
        return new static(
            TdSchemaRegistry::fromArray($array['photo']),
            TdSchemaRegistry::fromArray($array['caption']),
            $array['has_spoiler'],
            $array['is_secret'],
        );
    }

    public function getCaption(): FormattedText
    {
        return $this->caption;
    }

    public function getHasSpoiler(): bool
    {
        return $this->hasSpoiler;
    }

    public function getIsSecret(): bool
    {
        return $this->isSecret;
    }

    public function getPhoto(): Photo
    {
        return $this->photo;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'photo' => $this->photo->typeSerialize(),
            'caption' => $this->caption->typeSerialize(),
            'has_spoiler' => $this->hasSpoiler,
            'is_secret' => $this->isSecret,
        ];
    }
}
