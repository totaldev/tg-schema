<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Close;

use Totaldev\TgSchema\TdFunction;

/**
 * Informs TDLib that a previously opened Web App was closed.
 */
class CloseWebApp extends TdFunction
{
    public const TYPE_NAME = 'closeWebApp';

    public function __construct(
        /**
         * Identifier of Web App launch, received from openWebApp.
         */
        protected int $webAppLaunchId
    ) {}

    public static function fromArray(array $array): CloseWebApp
    {
        return new static(
            $array['web_app_launch_id'],
        );
    }

    public function getWebAppLaunchId(): int
    {
        return $this->webAppLaunchId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'web_app_launch_id' => $this->webAppLaunchId,
        ];
    }
}
