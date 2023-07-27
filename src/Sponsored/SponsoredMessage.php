<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

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
     * Message identifier; unique for the chat to which the sponsored message belongs among both ordinary and sponsored messages
     *
     * @var int
     */
    protected int $messageId;

    /**
     * True, if the message needs to be labeled as "recommended" instead of "sponsored"
     *
     * @var bool
     */
    protected bool $isRecommended;

    /**
     * Content of the message. Currently, can be only of the type messageText
     *
     * @var MessageContent
     */
    protected MessageContent $content;

    /**
     * Information about the sponsor of the message
     *
     * @var MessageSponsor
     */
    protected MessageSponsor $sponsor;

    /**
     * If non-empty, additional information about the sponsored message to be shown along with the message
     *
     * @var string
     */
    protected string $additionalInfo;

    public function __construct(
        int $messageId,
        bool $isRecommended,
        MessageContent $content,
        MessageSponsor $sponsor,
        string $additionalInfo,
    ) {
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

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getIsRecommended(): bool
    {
        return $this->isRecommended;
    }

    public function getContent(): MessageContent
    {
        return $this->content;
    }

    public function getSponsor(): MessageSponsor
    {
        return $this->sponsor;
    }

    public function getAdditionalInfo(): string
    {
        return $this->additionalInfo;
    }
}
