<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * Contains a list of sponsored messages
 */
class SponsoredMessages extends TdObject
{
    public const TYPE_NAME = 'sponsoredMessages';

    /**
     * List of sponsored messages
     *
     * @var SponsoredMessage[]
     */
    protected array $messages;

    /**
     * The minimum number of messages between shown sponsored messages, or 0 if only one sponsored message must be shown after all ordinary messages
     *
     * @var int
     */
    protected int $messagesBetween;

    public function __construct(array $messages, int $messagesBetween)
    {
        $this->messages = $messages;
        $this->messagesBetween = $messagesBetween;
    }

    public static function fromArray(array $array): SponsoredMessages
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['messages']),
            $array['messages_between'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->messages),
            'messages_between' => $this->messagesBetween,
        ];
    }

    public function getMessages(): array
    {
        return $this->messages;
    }

    public function getMessagesBetween(): int
    {
        return $this->messagesBetween;
    }
}
