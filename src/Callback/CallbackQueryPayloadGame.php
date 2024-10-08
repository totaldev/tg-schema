<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Callback;

/**
 * The payload for a game callback button.
 */
class CallbackQueryPayloadGame extends CallbackQueryPayload
{
    public const TYPE_NAME = 'callbackQueryPayloadGame';

    public function __construct(
        /**
         * A short name of the game that was attached to the callback button.
         */
        protected string $gameShortName
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): CallbackQueryPayloadGame
    {
        return new static(
            $array['game_short_name'],
        );
    }

    public function getGameShortName(): string
    {
        return $this->gameShortName;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'game_short_name' => $this->gameShortName,
        ];
    }
}
