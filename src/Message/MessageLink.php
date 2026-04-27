<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdObject;

/**
 * Contains an HTTPS link to a message in a supergroup or channel, or a forum topic.
 */
class MessageLink extends TdObject
{
    public const string TYPE_NAME = 'messageLink';

    public function __construct(
        /**
         * True, if the link will work for non-members of the chat.
         */
        protected bool   $isPublic,
        /**
         * The link.
         */
        protected string $link,
    ) {}

    public static function fromArray(array $array): MessageLink
    {
        return new static(
            isPublic: $array['is_public'],
            link    : $array['link'],
        );
    }

    public function getIsPublic(): bool
    {
        return $this->isPublic;
    }

    public function getLink(): string
    {
        return $this->link;
    }

    public function setIsPublic(bool $value): static
    {
        $this->isPublic = $value;

        return $this;
    }

    public function setLink(string $value): static
    {
        $this->link = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'is_public' => $this->isPublic,
            'link'      => $this->link,
        ];
    }
}
