<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Bot\BotMenuButton;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sets menu button for the given user or for all users; for bots only.
 */
class SetMenuButton extends TdFunction
{
    public const TYPE_NAME = 'setMenuButton';

    public function __construct(
        /**
         * Identifier of the user or 0 to set menu button for all users.
         */
        protected int           $userId,
        /**
         * New menu button.
         */
        protected BotMenuButton $menuButton
    ) {}

    public static function fromArray(array $array): SetMenuButton
    {
        return new static(
            $array['user_id'],
            TdSchemaRegistry::fromArray($array['menu_button']),
        );
    }

    public function getMenuButton(): BotMenuButton
    {
        return $this->menuButton;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'user_id'     => $this->userId,
            'menu_button' => $this->menuButton->typeSerialize(),
        ];
    }
}
