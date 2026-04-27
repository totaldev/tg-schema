<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Delete;

use Totaldev\TgSchema\TdFunction;

/**
 * Deletes media previews from the list of media previews of a bot.
 */
class DeleteBotMediaPreviews extends TdFunction
{
    public const string TYPE_NAME = 'deleteBotMediaPreviews';

    public function __construct(
        /**
         * Identifier of the target bot. The bot must be owned and must have the main Web App.
         */
        protected int    $botUserId,
        /**
         * File identifiers of the media to delete.
         *
         * @var int[]
         */
        protected array  $fileIds,
        /**
         * Language code of the media previews to delete.
         */
        protected string $languageCode,
    ) {}

    public static function fromArray(array $array): DeleteBotMediaPreviews
    {
        return new static(
            botUserId   : $array['bot_user_id'],
            fileIds     : $array['file_ids'],
            languageCode: $array['language_code'],
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

    public function setBotUserId(int $value): static
    {
        $this->botUserId = $value;

        return $this;
    }

    public function setFileIds(array $value): static
    {
        $this->fileIds = $value;

        return $this;
    }

    public function setLanguageCode(string $value): static
    {
        $this->languageCode = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'bot_user_id'   => $this->botUserId,
            'file_ids'      => $this->fileIds,
            'language_code' => $this->languageCode,
        ];
    }
}
