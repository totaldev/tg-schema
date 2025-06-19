<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Target;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The chat needs to be chosen by the user among chats of the specified types.
 */
class TargetChatChosen extends TargetChat
{
    public const TYPE_NAME = 'targetChatChosen';

    public function __construct(
        /**
         * Allowed types for the chat.
         */
        protected TargetChatTypes $types
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): TargetChatChosen
    {
        return new static(
            TdSchemaRegistry::fromArray($array['types']),
        );
    }

    public function getTypes(): TargetChatTypes
    {
        return $this->types;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'types' => $this->types->typeSerialize(),
        ];
    }
}
