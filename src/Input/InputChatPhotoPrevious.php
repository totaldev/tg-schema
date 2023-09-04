<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A previously used profile photo of the current user
 */
class InputChatPhotoPrevious extends InputChatPhoto
{
    public const TYPE_NAME = 'inputChatPhotoPrevious';

    /**
     * Identifier of the current user's profile photo to reuse
     *
     * @var int
     */
    protected int $chatPhotoId;

    public function __construct(int $chatPhotoId)
    {
        parent::__construct();

        $this->chatPhotoId = $chatPhotoId;
    }

    public static function fromArray(array $array): InputChatPhotoPrevious
    {
        return new static(
            $array['chat_photo_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_photo_id' => $this->chatPhotoId,
        ];
    }

    public function getChatPhotoId(): int
    {
        return $this->chatPhotoId;
    }
}
