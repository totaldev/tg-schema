<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Photo\Photo;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Information about the sponsor of a message.
 */
class MessageSponsor extends TdObject
{
    public const TYPE_NAME = 'messageSponsor';

    public function __construct(
        /**
         * URL of the sponsor to be opened when the message is clicked.
         */
        protected string $url,
        /**
         * Photo of the sponsor; may be null if must not be shown.
         */
        protected ?Photo $photo,
        /**
         * Additional optional information about the sponsor to be shown along with the message.
         */
        protected string $info,
    ) {}

    public static function fromArray(array $array): MessageSponsor
    {
        return new static(
            $array['url'],
            isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null,
            $array['info'],
        );
    }

    public function getInfo(): string
    {
        return $this->info;
    }

    public function getPhoto(): ?Photo
    {
        return $this->photo;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'url'   => $this->url,
            'photo' => (isset($this->photo) ? $this->photo : null),
            'info'  => $this->info,
        ];
    }
}
