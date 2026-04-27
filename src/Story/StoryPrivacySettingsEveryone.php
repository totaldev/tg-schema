<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

/**
 * The story can be viewed by everyone.
 */
class StoryPrivacySettingsEveryone extends StoryPrivacySettings
{
    public const string TYPE_NAME = 'storyPrivacySettingsEveryone';

    public function __construct(
        /**
         * Identifiers of the users that can't see the story; always unknown and empty for non-owned stories.
         *
         * @var int[]
         */
        protected array $exceptUserIds
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StoryPrivacySettingsEveryone
    {
        return new static(
            exceptUserIds: $array['except_user_ids'],
        );
    }

    public function getExceptUserIds(): array
    {
        return $this->exceptUserIds;
    }

    public function setExceptUserIds(array $value): static
    {
        $this->exceptUserIds = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'except_user_ids' => $this->exceptUserIds,
        ];
    }
}
