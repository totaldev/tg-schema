<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * Sends data received from a keyboardButtonTypeWebApp Web App to a bot
 */
class SendWebAppData extends TdFunction
{
    public const TYPE_NAME = 'sendWebAppData';

    /**
     * Identifier of the target bot
     *
     * @var int
     */
    protected int $botUserId;

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

    public function __construct(int $botUserId, string $buttonText, string $data)
    {
        $this->botUserId = $botUserId;
        $this->buttonText = $buttonText;
        $this->data = $data;
    }

    public static function fromArray(array $array): SendWebAppData
    {
        return new static(
            $array['bot_user_id'],
            $array['button_text'],
            $array['data'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'bot_user_id' => $this->botUserId,
            'button_text' => $this->buttonText,
            'data' => $this->data,
        ];
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getButtonText(): string
    {
        return $this->buttonText;
    }

    public function getData(): string
    {
        return $this->data;
    }
}
