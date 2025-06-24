<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Unconfirmed\UnconfirmedSession;

/**
 * The first unconfirmed session has changed.
 */
class UpdateUnconfirmedSession extends Update
{
    public const TYPE_NAME = 'updateUnconfirmedSession';

    public function __construct(
        /**
         * The unconfirmed session; may be null if none.
         */
        protected ?UnconfirmedSession $session
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateUnconfirmedSession
    {
        return new static(
            isset($array['session']) ? TdSchemaRegistry::fromArray($array['session']) : null,
        );
    }

    public function getSession(): ?UnconfirmedSession
    {
        return $this->session;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'session' => $this->session ?? null,
        ];
    }
}
