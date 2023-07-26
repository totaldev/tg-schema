<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * The story can be viewed by certain specified users
 */
class StoryPrivacySettingsSelectedContacts extends StoryPrivacySettings
{
    public const TYPE_NAME = 'storyPrivacySettingsSelectedContacts';

    /**
     * Identifiers of the users; always empty for non-owned stories
     *
     * @var int[]
     */
    protected array $userIds;

    public function __construct(array $userIds)
    {
        parent::__construct();

        $this->userIds = $userIds;
    }

    public static function fromArray(array $array): StoryPrivacySettingsSelectedContacts
    {
        return new static(
            $array['user_ids'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'user_ids' => $this->userIds,
        ];
    }

    public function getUserIds(): array
    {
        return $this->userIds;
    }
}
