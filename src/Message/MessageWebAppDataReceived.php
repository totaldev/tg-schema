<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * Data from a Web App has been received; for bots only.
 */
class MessageWebAppDataReceived extends MessageContent
{
    public const string TYPE_NAME = 'messageWebAppDataReceived';

    public function __construct(
        /**
         * Text of the keyboardButtonTypeWebApp button, which opened the Web App.
         */
        protected string $buttonText,
        /**
         * The data.
         */
        protected string $data,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageWebAppDataReceived
    {
        return new static(
            buttonText: $array['button_text'],
            data      : $array['data'],
        );
    }

    public function getButtonText(): string
    {
        return $this->buttonText;
    }

    public function getData(): string
    {
        return $this->data;
    }

    public function setButtonText(string $value): static
    {
        $this->buttonText = $value;

        return $this;
    }

    public function setData(string $value): static
    {
        $this->data = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'button_text' => $this->buttonText,
            'data'        => $this->data,
        ];
    }
}
