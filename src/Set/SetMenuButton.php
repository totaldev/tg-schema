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
    public const string TYPE_NAME = 'setMenuButton';

    public function __construct(
        /**
         * New menu button.
         */
        protected BotMenuButton $menuButton,
        /**
         * Identifier of the user or 0 to set menu button for all users.
         */
        protected int           $userId,
    ) {}

    public static function fromArray(array $array): SetMenuButton
    {
        return new static(
            menuButton: TdSchemaRegistry::fromArray($array['menu_button']),
            userId    : $array['user_id'],
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

    public function setMenuButton(BotMenuButton $value): static
    {
        $this->menuButton = $value;

        return $this;
    }

    public function setUserId(int $value): static
    {
        $this->userId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'menu_button' => $this->menuButton->jsonSerialize(),
            'user_id'     => $this->userId,
        ];
    }
}
