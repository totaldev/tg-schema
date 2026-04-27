<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Create;

use Totaldev\TgSchema\Call\CallProtocol;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Creates a new call.
 */
class CreateCall extends TdFunction
{
    public const string TYPE_NAME = 'createCall';

    public function __construct(
        /**
         * Pass true to create a video call.
         */
        protected bool         $isVideo,
        /**
         * The call protocols supported by the application.
         */
        protected CallProtocol $protocol,
        /**
         * Identifier of the user to be called.
         */
        protected int          $userId,
    ) {}

    public static function fromArray(array $array): CreateCall
    {
        return new static(
            isVideo : $array['is_video'],
            protocol: TdSchemaRegistry::fromArray($array['protocol']),
            userId  : $array['user_id'],
        );
    }

    public function getIsVideo(): bool
    {
        return $this->isVideo;
    }

    public function getProtocol(): CallProtocol
    {
        return $this->protocol;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setIsVideo(bool $value): static
    {
        $this->isVideo = $value;

        return $this;
    }

    public function setProtocol(CallProtocol $value): static
    {
        $this->protocol = $value;

        return $this;
    }

    public function setUserId(int $value): static
    {
        $this->userId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'is_video' => $this->isVideo,
            'protocol' => $this->protocol->jsonSerialize(),
            'user_id'  => $this->userId,
        ];
    }
}
