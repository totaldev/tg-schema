<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The chat available reactions were changed
 */
class ChatEventAvailableReactionsChanged extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventAvailableReactionsChanged';

    /**
     * New chat available reactions
     *
     * @var ChatAvailableReactions
     */
    protected ChatAvailableReactions $newAvailableReactions;

    /**
     * Previous chat available reactions
     *
     * @var ChatAvailableReactions
     */
    protected ChatAvailableReactions $oldAvailableReactions;

    public function __construct(
        ChatAvailableReactions $oldAvailableReactions,
        ChatAvailableReactions $newAvailableReactions,
    )
    {
        parent::__construct();

        $this->oldAvailableReactions = $oldAvailableReactions;
        $this->newAvailableReactions = $newAvailableReactions;
    }

    public static function fromArray(array $array): ChatEventAvailableReactionsChanged
    {
        return new static(
            TdSchemaRegistry::fromArray($array['old_available_reactions']),
            TdSchemaRegistry::fromArray($array['new_available_reactions']),
        );
    }

    public function getNewAvailableReactions(): ChatAvailableReactions
    {
        return $this->newAvailableReactions;
    }

    public function getOldAvailableReactions(): ChatAvailableReactions
    {
        return $this->oldAvailableReactions;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'old_available_reactions' => $this->oldAvailableReactions->typeSerialize(),
            'new_available_reactions' => $this->newAvailableReactions->typeSerialize(),
        ];
    }
}
