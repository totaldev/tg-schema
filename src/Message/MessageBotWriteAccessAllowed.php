<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Web\WebApp;

/**
 * The user allowed the bot to send messages
 */
class MessageBotWriteAccessAllowed extends MessageContent
{
    public const TYPE_NAME = 'messageBotWriteAccessAllowed';

    /**
     * True, if user allowed the bot to send messages by an explicit call to allowBotToSendMessages
     *
     * @var bool
     */
    protected bool $byRequest;

    /**
     * Information about the Web App, which requested the access; may be null if none or the Web App was opened from the attachment menu
     *
     * @var WebApp|null
     */
    protected ?WebApp $webApp;

    public function __construct(?WebApp $webApp, bool $byRequest)
    {
        parent::__construct();

        $this->webApp = $webApp;
        $this->byRequest = $byRequest;
    }

    public static function fromArray(array $array): MessageBotWriteAccessAllowed
    {
        return new static(
            (isset($array['web_app']) ? TdSchemaRegistry::fromArray($array['web_app']) : null),
            $array['by_request'],
        );
    }

    public function getByRequest(): bool
    {
        return $this->byRequest;
    }

    public function getWebApp(): ?WebApp
    {
        return $this->webApp;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'web_app' => (isset($this->webApp) ? $this->webApp : null),
            'by_request' => $this->byRequest,
        ];
    }
}
