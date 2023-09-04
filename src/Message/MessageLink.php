<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains an HTTPS link to a message in a supergroup or channel, or a forum topic
 */
class MessageLink extends TdObject
{
    public const TYPE_NAME = 'messageLink';

    /**
     * The link
     *
     * @var string
     */
    protected string $link;

    /**
     * True, if the link will work for non-members of the chat
     *
     * @var bool
     */
    protected bool $isPublic;

    public function __construct(string $link, bool $isPublic)
    {
        $this->link = $link;
        $this->isPublic = $isPublic;
    }

    public static function fromArray(array $array): MessageLink
    {
        return new static(
            $array['link'],
            $array['is_public'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'link' => $this->link,
            'is_public' => $this->isPublic,
        ];
    }

    public function getLink(): string
    {
        return $this->link;
    }

    public function getIsPublic(): bool
    {
        return $this->isPublic;
    }
}
