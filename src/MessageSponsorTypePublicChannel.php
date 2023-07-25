<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * The sponsor is a public channel chat
 */
class MessageSponsorTypePublicChannel extends MessageSponsorType
{
    public const TYPE_NAME = 'messageSponsorTypePublicChannel';

    /**
     * Sponsor chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * An internal link to be opened when the sponsored message is clicked; may be null if the sponsor chat needs to be opened instead
     *
     * @var InternalLinkType|null
     */
    protected ?InternalLinkType $link;

    public function __construct(int $chatId, ?InternalLinkType $link)
    {
        parent::__construct();

        $this->chatId = $chatId;
        $this->link = $link;
    }

    public static function fromArray(array $array): MessageSponsorTypePublicChannel
    {
        return new static(
            $array['chat_id'],
            (isset($array['link']) ? TdSchemaRegistry::fromArray($array['link']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'link' => (isset($this->link) ? $this->link : null),
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getLink(): ?InternalLinkType
    {
        return $this->link;
    }
}
