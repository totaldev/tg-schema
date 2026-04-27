<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Sponsored;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of sponsored messages.
 */
class SponsoredMessages extends TdObject
{
    public const string TYPE_NAME = 'sponsoredMessages';

    public function __construct(
        /**
         * List of sponsored messages.
         *
         * @var SponsoredMessage[]
         */
        protected array $messages,
        /**
         * The minimum number of messages between shown sponsored messages, or 0 if only one sponsored message must be shown after all ordinary messages.
         */
        protected int   $messagesBetween,
    ) {}

    public static function fromArray(array $array): SponsoredMessages
    {
        return new static(
            messages       : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['messages']),
            messagesBetween: $array['messages_between'],
        );
    }

    public function getMessages(): array
    {
        return $this->messages;
    }

    public function getMessagesBetween(): int
    {
        return $this->messagesBetween;
    }

    public function setMessages(array $value): static
    {
        $this->messages = $value;

        return $this;
    }

    public function setMessagesBetween(int $value): static
    {
        $this->messagesBetween = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'messages'         => array_map(static fn($x) => $x->jsonSerialize(), $this->messages),
            'messages_between' => $this->messagesBetween,
        ];
    }
}
