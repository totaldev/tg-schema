<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * The list of available message effects has changed.
 */
class UpdateAvailableMessageEffects extends Update
{
    public const TYPE_NAME = 'updateAvailableMessageEffects';

    public function __construct(
        /**
         * The new list of available message effects from emoji reactions.
         *
         * @var int[]
         */
        protected array $reactionEffectIds,
        /**
         * The new list of available message effects from Premium stickers.
         *
         * @var int[]
         */
        protected array $stickerEffectIds
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateAvailableMessageEffects
    {
        return new static(
            $array['reaction_effect_ids'],
            $array['sticker_effect_ids'],
        );
    }

    public function getReactionEffectIds(): array
    {
        return $this->reactionEffectIds;
    }

    public function getStickerEffectIds(): array
    {
        return $this->stickerEffectIds;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'reaction_effect_ids' => $this->reactionEffectIds,
            'sticker_effect_ids'  => $this->stickerEffectIds,
        ];
    }
}
