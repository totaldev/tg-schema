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
    public const string TYPE_NAME = 'updateFreezeState';

    public function __construct(
        /**
         * The link to open to send an appeal to unfreeze the account.
         */
        protected string $appealLink,
        /**
         * Point in time (Unix timestamp) when the account will be deleted and can't be unfrozen; 0 if the account isn't frozen.
         */
        protected int    $deletionDate,
        /**
         * Point in time (Unix timestamp) when the account was frozen; 0 if the account isn't frozen.
         */
        protected int    $freezingDate,
        /**
         * True, if the account is frozen.
         */
        protected bool   $isFrozen,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateFreezeState
    {
        return new static(
            appealLink  : $array['appeal_link'],
            deletionDate: $array['deletion_date'],
            freezingDate: $array['freezing_date'],
            isFrozen    : $array['is_frozen'],
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

    public function setAppealLink(string $value): static
    {
        $this->appealLink = $value;

        return $this;
    }

    public function setDeletionDate(int $value): static
    {
        $this->deletionDate = $value;

        return $this;
    }

    public function setFreezingDate(int $value): static
    {
        $this->freezingDate = $value;

        return $this;
    }

    public function setIsFrozen(bool $value): static
    {
        $this->isFrozen = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'appeal_link'   => $this->appealLink,
            'deletion_date' => $this->deletionDate,
            'freezing_date' => $this->freezingDate,
            'is_frozen'     => $this->isFrozen,
        ];
    }
}
