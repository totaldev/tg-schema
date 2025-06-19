<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Link;

use Totaldev\TgSchema\Chat\ChatPhoto;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The link is a link to a user.
 */
class LinkPreviewTypeUser extends LinkPreviewType
{
    public const TYPE_NAME = 'linkPreviewTypeUser';

    public function __construct(
        /**
         * Photo of the user; may be null if none.
         */
        protected ?ChatPhoto $photo,
        /**
         * True, if the user is a bot.
         */
        protected bool       $isBot
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): LinkPreviewTypeUser
    {
        return new static(
            isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null,
            $array['is_bot'],
        );
    }

    public function getIsBot(): bool
    {
        return $this->isBot;
    }

    public function getPhoto(): ?ChatPhoto
    {
        return $this->photo;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'photo'  => (isset($this->photo) ? $this->photo : null),
            'is_bot' => $this->isBot,
        ];
    }
}
