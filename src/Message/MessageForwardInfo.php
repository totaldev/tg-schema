<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Forward\ForwardSource;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about a forwarded message.
 */
class MessageForwardInfo extends TdObject
{
    public const TYPE_NAME = 'messageForwardInfo';

    public function __construct(
        /**
         * Origin of the forwarded message.
         */
        protected MessageOrigin  $origin,
        /**
         * Point in time (Unix timestamp) when the message was originally sent.
         */
        protected int            $date,
        /**
         * For messages forwarded to the chat with the current user (Saved Messages), to the Replies bot chat, or to the channel's discussion group, information about the source message from which the message was forwarded last time; may be null for other forwards or if unknown.
         */
        protected ?ForwardSource $source,
        /**
         * The type of public service announcement for the forwarded message.
         */
        protected string         $publicServiceAnnouncementType,
    ) {}

    public static function fromArray(array $array): MessageForwardInfo
    {
        return new static(
            TdSchemaRegistry::fromArray($array['origin']),
            $array['date'],
            isset($array['source']) ? TdSchemaRegistry::fromArray($array['source']) : null,
            $array['public_service_announcement_type'],
        );
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getOrigin(): MessageOrigin
    {
        return $this->origin;
    }

    public function getPublicServiceAnnouncementType(): string
    {
        return $this->publicServiceAnnouncementType;
    }

    public function getSource(): ?ForwardSource
    {
        return $this->source;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                            => static::TYPE_NAME,
            'origin'                           => $this->origin->typeSerialize(),
            'date'                             => $this->date,
            'source'                           => $this->source ?? null,
            'public_service_announcement_type' => $this->publicServiceAnnouncementType,
        ];
    }
}
