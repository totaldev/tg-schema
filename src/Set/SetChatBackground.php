<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Background\BackgroundType;
use Totaldev\TgSchema\Input\InputBackground;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes the background in a specific chat. Supported only in private and secret chats with non-deleted users
 */
class SetChatBackground extends TdFunction
{
    public const TYPE_NAME = 'setChatBackground';

    /**
     * The input background to use; pass null to create a new filled background or to remove the current background
     *
     * @var InputBackground
     */
    protected InputBackground $background;

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Dimming of the background in dark themes, as a percentage; 0-100
     *
     * @var int
     */
    protected int $darkThemeDimming;

    /**
     * Background type; pass null to remove the current background
     *
     * @var BackgroundType
     */
    protected BackgroundType $type;

    public function __construct(int $chatId, InputBackground $background, BackgroundType $type, int $darkThemeDimming)
    {
        $this->chatId = $chatId;
        $this->background = $background;
        $this->type = $type;
        $this->darkThemeDimming = $darkThemeDimming;
    }

    public static function fromArray(array $array): SetChatBackground
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['background']),
            TdSchemaRegistry::fromArray($array['type']),
            $array['dark_theme_dimming'],
        );
    }

    public function getBackground(): InputBackground
    {
        return $this->background;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getDarkThemeDimming(): int
    {
        return $this->darkThemeDimming;
    }

    public function getType(): BackgroundType
    {
        return $this->type;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'background' => $this->background->typeSerialize(),
            'type' => $this->type->typeSerialize(),
            'dark_theme_dimming' => $this->darkThemeDimming,
        ];
    }
}
