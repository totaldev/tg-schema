<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdObject;

/**
 * Information about the sponsor of a message
 */
class MessageSponsor extends TdObject
{
    public const TYPE_NAME = 'messageSponsor';

    /**
     * Type of the sponsor
     *
     * @var MessageSponsorType
     */
    protected MessageSponsorType $type;

    /**
     * Photo of the sponsor; may be null if must not be shown
     *
     * @var ChatPhotoInfo|null
     */
    protected ?ChatPhotoInfo $photo;

    /**
     * Additional optional information about the sponsor to be shown along with the message
     *
     * @var string
     */
    protected string $info;

    public function __construct(MessageSponsorType $type, ?ChatPhotoInfo $photo, string $info)
    {
        $this->type = $type;
        $this->photo = $photo;
        $this->info = $info;
    }

    public static function fromArray(array $array): MessageSponsor
    {
        return new static(
            TdSchemaRegistry::fromArray($array['type']),
            (isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null),
            $array['info'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'type' => $this->type->typeSerialize(),
            'photo' => (isset($this->photo) ? $this->photo : null),
            'info' => $this->info,
        ];
    }

    public function getType(): MessageSponsorType
    {
        return $this->type;
    }

    public function getPhoto(): ?ChatPhotoInfo
    {
        return $this->photo;
    }

    public function getInfo(): string
    {
        return $this->info;
    }
}
