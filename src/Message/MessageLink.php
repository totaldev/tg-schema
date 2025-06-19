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
    public const TYPE_NAME = 'messageLink';

    public function __construct(
        /**
         * The link.
         */
        protected string $link,
        /**
         * True, if the link will work for non-members of the chat.
         */
        protected bool   $isPublic
    ) {}

    public static function fromArray(array $array): MessageLink
    {
        return new static(
            $array['link'],
            $array['is_public'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'link'      => $this->link,
            'is_public' => $this->isPublic,
        ];
    }
}
