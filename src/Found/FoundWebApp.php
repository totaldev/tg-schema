<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Found;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Web\WebApp;

/**
 * Contains information about a Web App found by its short name.
 */
class FoundWebApp extends TdObject
{
    public const string TYPE_NAME = 'foundWebApp';

    public function __construct(
        /**
         * True, if the user must be asked for the permission to the bot to send them messages.
         */
        protected bool   $requestWriteAccess,
        /**
         * True, if there is no need to show an ordinary open URL confirmation before opening the Web App. The field must be ignored and confirmation must be shown anyway if the Web App link was hidden.
         */
        protected bool   $skipConfirmation,
        /**
         * The Web App.
         */
        protected WebApp $webApp,
    ) {}

    public static function fromArray(array $array): FoundWebApp
    {
        return new static(
            requestWriteAccess: $array['request_write_access'],
            skipConfirmation  : $array['skip_confirmation'],
            webApp            : TdSchemaRegistry::fromArray($array['web_app']),
        );
    }

    public function getRequestWriteAccess(): bool
    {
        return $this->requestWriteAccess;
    }

    public function getSkipConfirmation(): bool
    {
        return $this->skipConfirmation;
    }

    public function getWebApp(): WebApp
    {
        return $this->webApp;
    }

    public function setRequestWriteAccess(bool $value): static
    {
        $this->requestWriteAccess = $value;

        return $this;
    }

    public function setSkipConfirmation(bool $value): static
    {
        $this->skipConfirmation = $value;

        return $this;
    }

    public function setWebApp(WebApp $value): static
    {
        $this->webApp = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'request_write_access' => $this->requestWriteAccess,
            'skip_confirmation'    => $this->skipConfirmation,
            'web_app'              => $this->webApp->jsonSerialize(),
        ];
    }
}
