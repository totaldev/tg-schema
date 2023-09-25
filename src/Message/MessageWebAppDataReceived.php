<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Data from a Web App has been received; for bots only
 */
class MessageWebAppDataReceived extends MessageContent
{
    public const TYPE_NAME = 'messageWebAppDataReceived';

    /**
     * Text of the keyboardButtonTypeWebApp button, which opened the Web App
     *
     * @var string
     */
    protected string $buttonText;

    /**
     * The data
     *
     * @var string
     */
    protected string $data;

    public function __construct(string $buttonText, string $data)
    {
        parent::__construct();

        $this->buttonText = $buttonText;
        $this->data = $data;
    }

    public static function fromArray(array $array): MessageWebAppDataReceived
    {
        return new static(
            $array['button_text'],
            $array['data'],
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'button_text' => $this->buttonText,
            'data' => $this->data,
        ];
    }
}
