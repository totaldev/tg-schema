<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * Data from a Web App has been sent to a bot.
 */
class MessageWebAppDataSent extends MessageContent
{
    public const TYPE_NAME = 'messageWebAppDataSent';

    public function __construct(
        /**
         * Text of the keyboardButtonTypeWebApp button, which opened the Web App.
         */
        protected string $buttonText
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageWebAppDataSent
    {
        return new static(
            $array['button_text'],
        );
    }

    public function getButtonText(): string
    {
        return $this->buttonText;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'button_text' => $this->buttonText,
        ];
    }
}
