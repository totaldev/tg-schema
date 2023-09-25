<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains an HTTPS link to boost a chat
 */
class ChatBoostLink extends TdObject
{
    public const TYPE_NAME = 'chatBoostLink';

    /**
     * True, if the link will work for non-members of the chat
     *
     * @var bool
     */
    protected bool $isPublic;

    /**
     * The link
     *
     * @var string
     */
    protected string $link;

    public function __construct(string $link, bool $isPublic)
    {
        $this->link = $link;
        $this->isPublic = $isPublic;
    }

    public static function fromArray(array $array): ChatBoostLink
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
            '@type' => static::TYPE_NAME,
            'link' => $this->link,
            'is_public' => $this->isPublic,
        ];
    }
}
