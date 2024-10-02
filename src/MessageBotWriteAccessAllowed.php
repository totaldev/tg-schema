<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * The user allowed the bot to send messages
 */
class MessageBotWriteAccessAllowed extends MessageContent
{
    public const TYPE_NAME = 'messageBotWriteAccessAllowed';

    /**
     * Information about the Web App, which requested the access; may be null if none or the Web App was opened from the attachment menu
     *
     * @var WebApp|null
     */
    protected ?WebApp $webApp;

    public function __construct(?WebApp $webApp)
    {
        parent::__construct();

        $this->webApp = $webApp;
    }

    public static function fromArray(array $array): MessageBotWriteAccessAllowed
    {
        return new static(
            (isset($array['web_app']) ? TdSchemaRegistry::fromArray($array['web_app']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'web_app' => (isset($this->webApp) ? $this->webApp : null),
        ];
    }

    public function getWebApp(): ?WebApp
    {
        return $this->webApp;
    }
}
