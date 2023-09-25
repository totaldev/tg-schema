<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Sponsored;

use Totaldev\TgSchema\Message\MessageContent;
use Totaldev\TgSchema\Message\MessageSponsor;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a sponsored message
 */
class SponsoredMessage extends TdObject
{
    public const TYPE_NAME = 'sponsoredMessage';

    /**
     * If non-empty, additional information about the sponsored message to be shown along with the message
     *
     * @var string
     */
    protected string $additionalInfo;

    /**
     * Content of the message. Currently, can be only of the type messageText
     *
     * @var MessageContent
     */
    protected MessageContent $content;

    /**
     * True, if the message needs to be labeled as "recommended" instead of "sponsored"
     *
     * @var bool
     */
    protected bool $isRecommended;

    /**
     * Message identifier; unique for the chat to which the sponsored message belongs among both ordinary and sponsored messages
     *
     * @var int
     */
    protected int $messageId;

    /**
     * Information about the sponsor of the message
     *
     * @var MessageSponsor
     */
    protected MessageSponsor $sponsor;

    public function __construct(
        int            $messageId,
        bool           $isRecommended,
        MessageContent $content,
        MessageSponsor $sponsor,
        string         $additionalInfo,
    )
    {
        $this->messageId = $messageId;
        $this->isRecommended = $isRecommended;
        $this->content = $content;
        $this->sponsor = $sponsor;
        $this->additionalInfo = $additionalInfo;
    }

    public static function fromArray(array $array): SponsoredMessage
    {
        return new static(
            $array['message_id'],
            $array['is_recommended'],
            TdSchemaRegistry::fromArray($array['content']),
            TdSchemaRegistry::fromArray($array['sponsor']),
            $array['additional_info'],
        );
    }

    public function getAdditionalInfo(): string
    {
        return $this->additionalInfo;
    }

    public function getContent(): MessageContent
    {
        return $this->content;
    }

    public function getIsRecommended(): bool
    {
        return $this->isRecommended;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getSponsor(): MessageSponsor
    {
        return $this->sponsor;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'message_id' => $this->messageId,
            'is_recommended' => $this->isRecommended,
            'content' => $this->content->typeSerialize(),
            'sponsor' => $this->sponsor->typeSerialize(),
            'additional_info' => $this->additionalInfo,
        ];
    }
}
