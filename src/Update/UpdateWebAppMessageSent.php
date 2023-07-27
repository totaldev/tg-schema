<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A message was sent by an opened Web App, so the Web App needs to be closed
 */
class UpdateWebAppMessageSent extends Update
{
    public const TYPE_NAME = 'updateWebAppMessageSent';

    /**
     * Identifier of Web App launch
     *
     * @var int
     */
    protected int $webAppLaunchId;

    public function __construct(int $webAppLaunchId)
    {
        parent::__construct();

        $this->webAppLaunchId = $webAppLaunchId;
    }

    public static function fromArray(array $array): UpdateWebAppMessageSent
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
