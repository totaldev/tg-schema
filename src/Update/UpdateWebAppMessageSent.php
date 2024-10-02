<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * A message was sent by an opened Web App, so the Web App needs to be closed.
 */
class UpdateWebAppMessageSent extends Update
{
    public const TYPE_NAME = 'updateWebAppMessageSent';

    public function __construct(
        /**
         * Identifier of Web App launch.
         */
        protected int $webAppLaunchId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateWebAppMessageSent
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
