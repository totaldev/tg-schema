<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * The list of saved animations was updated.
 */
class UpdateSavedAnimations extends Update
{
    public const TYPE_NAME = 'updateSavedAnimations';

    public function __construct(
        /**
         * The new list of file identifiers of saved animations.
         *
         * @var int[]
         */
        protected array $animationIds
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateSavedAnimations
    {
        return new static(
            $array['animation_ids'],
        );
    }

    public function getAnimationIds(): array
    {
        return $this->animationIds;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'animation_ids' => $this->animationIds,
        ];
    }
}
