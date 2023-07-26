<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * A chat background was edited
 */
class PushMessageContentChatSetBackground extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentChatSetBackground';

    /**
     * True, if the set background is the same as the background of the current user
     *
     * @var bool
     */
    protected bool $isSame;

    public function __construct(bool $isSame)
    {
        parent::__construct();

        $this->isSame = $isSame;
    }

    public static function fromArray(array $array): PushMessageContentChatSetBackground
    {
        return new static(
            $array['is_same'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'is_same' => $this->isSame,
        ];
    }

    public function getIsSame(): bool
    {
        return $this->isSame;
    }
}
