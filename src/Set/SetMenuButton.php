<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Bot\BotMenuButton;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sets menu button for the given user or for all users; for bots only
 */
class SetMenuButton extends TdFunction
{
    public const TYPE_NAME = 'setMenuButton';

    /**
     * Identifier of the user or 0 to set menu button for all users
     *
     * @var int
     */
    protected int $userId;

    /**
     * New menu button
     *
     * @var BotMenuButton
     */
    protected BotMenuButton $menuButton;

    public function __construct(int $userId, BotMenuButton $menuButton)
    {
        $this->userId = $userId;
        $this->menuButton = $menuButton;
    }

    public static function fromArray(array $array): SetMenuButton
    {
        return new static(
            $array['user_id'],
            TdSchemaRegistry::fromArray($array['menu_button']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'user_id' => $this->userId,
            'menu_button' => $this->menuButton->typeSerialize(),
        ];
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getMenuButton(): BotMenuButton
    {
        return $this->menuButton;
    }
}
