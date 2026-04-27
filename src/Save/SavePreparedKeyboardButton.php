<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Save;

use Totaldev\TgSchema\Keyboard\KeyboardButton;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Saves a keyboard button to be shown to the given user; for bots only.
 */
class SavePreparedKeyboardButton extends TdFunction
{
    public const string TYPE_NAME = 'savePreparedKeyboardButton';

    public function __construct(
        /**
         * The button; must be of the type keyboardButtonTypeRequestUsers, keyboardButtonTypeRequestChat, or keyboardButtonTypeRequestManagedBot.
         */
        protected KeyboardButton $button,
        /**
         * Identifier of the user.
         */
        protected int            $userId,
    ) {}

    public static function fromArray(array $array): SavePreparedKeyboardButton
    {
        return new static(
            button: TdSchemaRegistry::fromArray($array['button']),
            userId: $array['user_id'],
        );
    }

    public function getButton(): KeyboardButton
    {
        return $this->button;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setButton(KeyboardButton $value): static
    {
        $this->button = $value;

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
            '@type'   => static::TYPE_NAME,
            'button'  => $this->button->jsonSerialize(),
            'user_id' => $this->userId,
        ];
    }
}
