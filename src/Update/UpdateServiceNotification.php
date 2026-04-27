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
    public const string TYPE_NAME = 'updateServiceNotification';

    public function __construct(
        /**
         * Notification content.
         */
        protected MessageContent $content,
        /**
         * Notification type. If type begins with "AUTH_KEY_DROP_", then two buttons "Cancel" and "Log out" must be shown under notification; if user presses the second, all local data must be destroyed using Destroy method.
         */
        protected string         $type,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateServiceNotification
    {
        return new static(
            content: TdSchemaRegistry::fromArray($array['content']),
            type   : $array['type'],
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

    public function setContent(MessageContent $value): static
    {
        $this->content = $value;

        return $this;
    }

    public function setType(string $value): static
    {
        $this->type = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'content' => $this->content->jsonSerialize(),
            'type'    => $this->type,
        ];
    }
}
