<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Create;

use Totaldev\TgSchema\Call\CallProtocol;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Creates a new call
 */
class CreateCall extends TdFunction
{
    public const TYPE_NAME = 'createCall';

    /**
     * Pass true to create a video call
     *
     * @var bool
     */
    protected bool $isVideo;

    /**
     * The call protocols supported by the application
     *
     * @var CallProtocol
     */
    protected CallProtocol $protocol;

    /**
     * Identifier of the user to be called
     *
     * @var int
     */
    protected int $userId;

    public function __construct(int $userId, CallProtocol $protocol, bool $isVideo)
    {
        $this->userId = $userId;
        $this->protocol = $protocol;
        $this->isVideo = $isVideo;
    }

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
            '@type' => static::TYPE_NAME,
            'user_id' => $this->userId,
            'protocol' => $this->protocol->typeSerialize(),
            'is_video' => $this->isVideo,
        ];
    }
}
