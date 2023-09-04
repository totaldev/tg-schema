<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Internal\InternalLinkType;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The sponsor is a bot
 */
class MessageSponsorTypeBot extends MessageSponsorType
{
    public const TYPE_NAME = 'messageSponsorTypeBot';

    /**
     * User identifier of the bot
     *
     * @var int
     */
    protected int $botUserId;

    /**
     * An internal link to be opened when the sponsored message is clicked
     *
     * @var InternalLinkType
     */
    protected InternalLinkType $link;

    public function __construct(int $botUserId, InternalLinkType $link)
    {
        parent::__construct();

        $this->botUserId = $botUserId;
        $this->link = $link;
    }

    public static function fromArray(array $array): MessageSponsorTypeBot
    {
        return new static(
            $array['bot_user_id'],
            TdSchemaRegistry::fromArray($array['link']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'bot_user_id' => $this->botUserId,
            'link' => $this->link->typeSerialize(),
        ];
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getLink(): InternalLinkType
    {
        return $this->link;
    }
}
