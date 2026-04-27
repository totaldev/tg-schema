<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

/**
 * A previously used profile photo of the current user.
 */
class InputChatPhotoPrevious extends InputChatPhoto
{
    public const string TYPE_NAME = 'inputChatPhotoPrevious';

    public function __construct(
        /**
         * Identifier of the current user's profile photo to reuse.
         */
        protected int $chatPhotoId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputChatPhotoPrevious
    {
        return new static(
            chatPhotoId: $array['chat_photo_id'],
        );
    }

    public function getChatPhotoId(): int
    {
        return $this->chatPhotoId;
    }

    public function setChatPhotoId(int $value): static
    {
        $this->chatPhotoId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'chat_photo_id' => $this->chatPhotoId,
        ];
    }
}
