<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Link;

use Totaldev\TgSchema\Chat\ChatPhoto;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The link is a link to boost a channel chat.
 */
class LinkPreviewTypeChannelBoost extends LinkPreviewType
{
    public const TYPE_NAME = 'linkPreviewTypeChannelBoost';

    public function __construct(
        /**
         * Photo of the chat; may be null.
         */
        protected ?ChatPhoto $photo
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): LinkPreviewTypeChannelBoost
    {
        return new static(
            isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null,
        );
    }

    public function getPhoto(): ?ChatPhoto
    {
        return $this->photo;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'photo' => (isset($this->photo) ? $this->photo : null),
        ];
    }
}
