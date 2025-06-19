<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * The freeze state of the current user's account has changed.
 */
class UpdateFreezeState extends Update
{
    public const TYPE_NAME = 'updateFreezeState';

    public function __construct(
        /**
         * True, if the account is frozen.
         */
        protected bool   $isFrozen,
        /**
         * Point in time (Unix timestamp) when the account was frozen; 0 if the account isn't frozen.
         */
        protected int    $freezingDate,
        /**
         * Point in time (Unix timestamp) when the account will be deleted and can't be unfrozen; 0 if the account isn't frozen.
         */
        protected int    $deletionDate,
        /**
         * The link to open to send an appeal to unfreeze the account.
         */
        protected string $appealLink
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateFreezeState
    {
        return new static(
            $array['is_frozen'],
            $array['freezing_date'],
            $array['deletion_date'],
            $array['appeal_link'],
        );
    }

    public function getAppealLink(): string
    {
        return $this->appealLink;
    }

    public function getDeletionDate(): int
    {
        return $this->deletionDate;
    }

    public function getFreezingDate(): int
    {
        return $this->freezingDate;
    }

    public function getIsFrozen(): bool
    {
        return $this->isFrozen;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'is_frozen'     => $this->isFrozen,
            'freezing_date' => $this->freezingDate,
            'deletion_date' => $this->deletionDate,
            'appeal_link'   => $this->appealLink,
        ];
    }
}
