<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Data from a Web App has been sent to a bot
 */
class MessageWebAppDataSent extends MessageContent
{
    public const TYPE_NAME = 'messageWebAppDataSent';

    /**
     * Text of the keyboardButtonTypeWebApp button, which opened the Web App
     *
     * @var string
     */
    protected string $buttonText;

    public function __construct(string $buttonText)
    {
        parent::__construct();

        $this->buttonText = $buttonText;
    }

    public static function fromArray(array $array): MessageWebAppDataSent
    {
        return new static(
            $array['button_text'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'button_text' => $this->buttonText,
        ];
    }

    public function getButtonText(): string
    {
        return $this->buttonText;
    }
}
