<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * Lists of bots which Mini Apps must be allowed to read text from clipboard and must be opened without a warning.
 */
class UpdateTrustedMiniAppBots extends Update
{
    public const string TYPE_NAME = 'updateTrustedMiniAppBots';

    public function __construct(
        /**
         * List of user identifiers of the bots; the corresponding users may not be sent using updateUser updates and may not be accessible.
         *
         * @var int[]
         */
        protected array $botUserIds
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateTrustedMiniAppBots
    {
        return new static(
            botUserIds: $array['bot_user_ids'],
        );
    }

    public function getBotUserIds(): array
    {
        return $this->botUserIds;
    }

    public function setBotUserIds(array $value): static
    {
        $this->botUserIds = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'bot_user_ids' => $this->botUserIds,
        ];
    }
}
