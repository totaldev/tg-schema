<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Message\MessageContent;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A service notification from the server was received. Upon receiving this the application must show a popup with the content of the notification.
 */
class UpdateServiceNotification extends Update
{
    public const TYPE_NAME = 'updateServiceNotification';

    public function __construct(
        /**
         * Notification type. If type begins with "AUTH_KEY_DROP_", then two buttons "Cancel" and "Log out" must be shown under notification; if user presses the second, all local data must be destroyed using Destroy method.
         */
        protected string         $type,
        /**
         * Notification content.
         */
        protected MessageContent $content,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateServiceNotification
    {
        return new static(
            $array['type'],
            TdSchemaRegistry::fromArray($array['content']),
        );
    }

    public function getContent(): MessageContent
    {
        return $this->content;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'type'    => $this->type,
            'content' => $this->content->typeSerialize(),
        ];
    }
}
