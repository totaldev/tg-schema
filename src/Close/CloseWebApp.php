<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Close;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Informs TDLib that a previously opened Web App was closed
 */
class CloseWebApp extends TdFunction
{
    public const TYPE_NAME = 'closeWebApp';

    /**
     * Identifier of Web App launch, received from openWebApp
     *
     * @var int
     */
    protected int $webAppLaunchId;

    public function __construct(int $webAppLaunchId)
    {
        $this->webAppLaunchId = $webAppLaunchId;
    }

    public static function fromArray(array $array): CloseWebApp
    {
        return new static(
            $array['web_app_launch_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'web_app_launch_id' => $this->webAppLaunchId,
        ];
    }

    public function getWebAppLaunchId(): int
    {
        return $this->webAppLaunchId;
    }
}
