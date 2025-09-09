<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

/**
 * The story can be viewed by certain specified users.
 */
class StoryPrivacySettingsSelectedUsers extends StoryPrivacySettings
{
    public const TYPE_NAME = 'storyPrivacySettingsSelectedUsers';

    public function __construct(
        /**
         * Identifiers of the users; always unknown and empty for non-owned stories.
         *
         * @var int[]
         */
        protected array $userIds
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StoryPrivacySettingsSelectedUsers
    {
        return new static(
            $array['user_ids'],
        );
    }

    public function getUserIds(): array
    {
        return $this->userIds;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'user_ids' => $this->userIds,
        ];
    }
}
