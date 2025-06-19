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
    public const TYPE_NAME = 'createCall';

    public function __construct(
        /**
         * Identifier of the user to be called.
         */
        protected int          $userId,
        /**
         * The call protocols supported by the application.
         */
        protected CallProtocol $protocol,
        /**
         * Pass true to create a video call.
         */
        protected bool         $isVideo
    ) {}

    public static function fromArray(array $array): CreateCall
    {
        return new static(
            $array['user_id'],
            TdSchemaRegistry::fromArray($array['protocol']),
            $array['is_video'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'user_id'  => $this->userId,
            'protocol' => $this->protocol->typeSerialize(),
            'is_video' => $this->isVideo,
        ];
    }
}
