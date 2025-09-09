<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Reorder;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes order of media previews in the list of media previews of a bot.
 */
class ReorderBotMediaPreviews extends TdFunction
{
    public const TYPE_NAME = 'reorderBotMediaPreviews';

    public function __construct(
        /**
         * Identifier of the target bot. The bot must be owned and must have the main Web App.
         */
        protected int    $botUserId,
        /**
         * Language code of the media previews to reorder.
         */
        protected string $languageCode,
        /**
         * File identifiers of the media in the new order.
         *
         * @var int[]
         */
        protected array  $fileIds,
    ) {}

    public static function fromArray(array $array): ReorderBotMediaPreviews
    {
        return new static(
            $array['bot_user_id'],
            $array['language_code'],
            $array['file_ids'],
        );
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getFileIds(): array
    {
        return $this->fileIds;
    }

    public function getLanguageCode(): string
    {
        return $this->languageCode;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'bot_user_id'   => $this->botUserId,
            'language_code' => $this->languageCode,
            'file_ids'      => $this->fileIds,
        ];
    }
}
