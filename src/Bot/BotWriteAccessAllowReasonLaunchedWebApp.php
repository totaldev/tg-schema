<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Bot;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Web\WebApp;

/**
 * The user launched a Web App using getWebAppLinkUrl.
 */
class BotWriteAccessAllowReasonLaunchedWebApp extends BotWriteAccessAllowReason
{
    public const TYPE_NAME = 'botWriteAccessAllowReasonLaunchedWebApp';

    public function __construct(
        /**
         * Information about the Web App.
         */
        protected WebApp $webApp
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): BotWriteAccessAllowReasonLaunchedWebApp
    {
        return new static(
            TdSchemaRegistry::fromArray($array['web_app']),
        );
    }

    public function getWebApp(): WebApp
    {
        return $this->webApp;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'web_app' => $this->webApp->typeSerialize(),
        ];
    }
}
