<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Inline;

/**
 * A button that asks for the 2-step verification password of the current user and then sends a callback query to a bot.
 */
class InlineKeyboardButtonTypeCallbackWithPassword extends InlineKeyboardButtonType
{
    public const TYPE_NAME = 'inlineKeyboardButtonTypeCallbackWithPassword';

    public function __construct(
        /**
         * Data to be sent to the bot via a callback query.
         */
        protected string $data
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InlineKeyboardButtonTypeCallbackWithPassword
    {
        return new static(
            $array['data'],
        );
    }

    public function getData(): string
    {
        return $this->data;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'data'  => $this->data,
        ];
    }
}
