<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * Changes a profile photo for a bot
 */
class SetBotProfilePhoto extends TdFunction
{
    public const TYPE_NAME = 'setBotProfilePhoto';

    /**
     * Identifier of the target bot
     *
     * @var int
     */
    protected int $botUserId;

    /**
     * Profile photo to set; pass null to delete the chat photo
     *
     * @var InputChatPhoto
     */
    protected InputChatPhoto $photo;

    public function __construct(int $botUserId, InputChatPhoto $photo)
    {
        $this->botUserId = $botUserId;
        $this->photo = $photo;
    }

    public static function fromArray(array $array): SetBotProfilePhoto
    {
        return new static(
            $array['bot_user_id'],
            TdSchemaRegistry::fromArray($array['photo']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'bot_user_id' => $this->botUserId,
            'photo' => $this->photo->typeSerialize(),
        ];
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getPhoto(): InputChatPhoto
    {
        return $this->photo;
    }
}
