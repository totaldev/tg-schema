<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\Date\DateRange;
use Totaldev\TgSchema\Statistical\StatisticalGraph;
use Totaldev\TgSchema\Statistical\StatisticalValue;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A detailed statistics about a channel chat.
 */
class ChatStatisticsChannel extends ChatStatistics
{
    public const TYPE_NAME = 'chatStatisticsChannel';

    public function __construct(
        /**
         * A period to which the statistics applies.
         */
        protected DateRange        $period,
        /**
         * Number of members in the chat.
         */
        protected StatisticalValue $memberCount,
        /**
         * Mean number of times the recently sent messages were viewed.
         */
        protected StatisticalValue $meanMessageViewCount,
        /**
         * Mean number of times the recently sent messages were shared.
         */
        protected StatisticalValue $meanMessageShareCount,
        /**
         * Mean number of times reactions were added to the recently sent messages.
         */
        protected StatisticalValue $meanMessageReactionCount,
        /**
         * Mean number of times the recently posted stories were viewed.
         */
        protected StatisticalValue $meanStoryViewCount,
        /**
         * Mean number of times the recently posted stories were shared.
         */
        protected StatisticalValue $meanStoryShareCount,
        /**
         * Mean number of times reactions were added to the recently posted stories.
         */
        protected StatisticalValue $meanStoryReactionCount,
        /**
         * A percentage of users with enabled notifications for the chat; 0-100.
         */
        protected float            $enabledNotificationsPercentage,
        /**
         * A graph containing number of members in the chat.
         */
        protected StatisticalGraph $memberCountGraph,
        /**
         * A graph containing number of members joined and left the chat.
         */
        protected StatisticalGraph $joinGraph,
        /**
         * A graph containing number of members muted and unmuted the chat.
         */
        protected StatisticalGraph $muteGraph,
        /**
         * A graph containing number of message views in a given hour in the last two weeks.
         */
        protected StatisticalGraph $viewCountByHourGraph,
        /**
         * A graph containing number of message views per source.
         */
        protected StatisticalGraph $viewCountBySourceGraph,
        /**
         * A graph containing number of new member joins per source.
         */
        protected StatisticalGraph $joinBySourceGraph,
        /**
         * A graph containing number of users viewed chat messages per language.
         */
        protected StatisticalGraph $languageGraph,
        /**
         * A graph containing number of chat message views and shares.
         */
        protected StatisticalGraph $messageInteractionGraph,
        /**
         * A graph containing number of reactions on messages.
         */
        protected StatisticalGraph $messageReactionGraph,
        /**
         * A graph containing number of story views and shares.
         */
        protected StatisticalGraph $storyInteractionGraph,
        /**
         * A graph containing number of reactions on stories.
         */
        protected StatisticalGraph $storyReactionGraph,
        /**
         * A graph containing number of views of associated with the chat instant views.
         */
        protected StatisticalGraph $instantViewInteractionGraph,
        /**
         * Detailed statistics about number of views and shares of recently sent messages and posted stories.
         *
         * @var ChatStatisticsInteractionInfo[]
         */
        protected array            $recentInteractions,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatStatisticsChannel
    {
        return new static(
            TdSchemaRegistry::fromArray($array['period']),
            TdSchemaRegistry::fromArray($array['member_count']),
            TdSchemaRegistry::fromArray($array['mean_message_view_count']),
            TdSchemaRegistry::fromArray($array['mean_message_share_count']),
            TdSchemaRegistry::fromArray($array['mean_message_reaction_count']),
            TdSchemaRegistry::fromArray($array['mean_story_view_count']),
            TdSchemaRegistry::fromArray($array['mean_story_share_count']),
            TdSchemaRegistry::fromArray($array['mean_story_reaction_count']),
            $array['enabled_notifications_percentage'],
            TdSchemaRegistry::fromArray($array['member_count_graph']),
            TdSchemaRegistry::fromArray($array['join_graph']),
            TdSchemaRegistry::fromArray($array['mute_graph']),
            TdSchemaRegistry::fromArray($array['view_count_by_hour_graph']),
            TdSchemaRegistry::fromArray($array['view_count_by_source_graph']),
            TdSchemaRegistry::fromArray($array['join_by_source_graph']),
            TdSchemaRegistry::fromArray($array['language_graph']),
            TdSchemaRegistry::fromArray($array['message_interaction_graph']),
            TdSchemaRegistry::fromArray($array['message_reaction_graph']),
            TdSchemaRegistry::fromArray($array['story_interaction_graph']),
            TdSchemaRegistry::fromArray($array['story_reaction_graph']),
            TdSchemaRegistry::fromArray($array['instant_view_interaction_graph']),
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['recent_interactions']),
        );
    }

    public function getEnabledNotificationsPercentage(): float
    {
        return $this->enabledNotificationsPercentage;
    }

    public function getInstantViewInteractionGraph(): StatisticalGraph
    {
        return $this->instantViewInteractionGraph;
    }

    public function getJoinBySourceGraph(): StatisticalGraph
    {
        return $this->joinBySourceGraph;
    }

    public function getJoinGraph(): StatisticalGraph
    {
        return $this->joinGraph;
    }

    public function getLanguageGraph(): StatisticalGraph
    {
        return $this->languageGraph;
    }

    public function getMeanMessageReactionCount(): StatisticalValue
    {
        return $this->meanMessageReactionCount;
    }

    public function getMeanMessageShareCount(): StatisticalValue
    {
        return $this->meanMessageShareCount;
    }

    public function getMeanMessageViewCount(): StatisticalValue
    {
        return $this->meanMessageViewCount;
    }

    public function getMeanStoryReactionCount(): StatisticalValue
    {
        return $this->meanStoryReactionCount;
    }

    public function getMeanStoryShareCount(): StatisticalValue
    {
        return $this->meanStoryShareCount;
    }

    public function getMeanStoryViewCount(): StatisticalValue
    {
        return $this->meanStoryViewCount;
    }

    public function getMemberCount(): StatisticalValue
    {
        return $this->memberCount;
    }

    public function getMemberCountGraph(): StatisticalGraph
    {
        return $this->memberCountGraph;
    }

    public function getMessageInteractionGraph(): StatisticalGraph
    {
        return $this->messageInteractionGraph;
    }

    public function getMessageReactionGraph(): StatisticalGraph
    {
        return $this->messageReactionGraph;
    }

    public function getMuteGraph(): StatisticalGraph
    {
        return $this->muteGraph;
    }

    public function getPeriod(): DateRange
    {
        return $this->period;
    }

    public function getRecentInteractions(): array
    {
        return $this->recentInteractions;
    }

    public function getStoryInteractionGraph(): StatisticalGraph
    {
        return $this->storyInteractionGraph;
    }

    public function getStoryReactionGraph(): StatisticalGraph
    {
        return $this->storyReactionGraph;
    }

    public function getViewCountByHourGraph(): StatisticalGraph
    {
        return $this->viewCountByHourGraph;
    }

    public function getViewCountBySourceGraph(): StatisticalGraph
    {
        return $this->viewCountBySourceGraph;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                            => static::TYPE_NAME,
            'period'                           => $this->period->typeSerialize(),
            'member_count'                     => $this->memberCount->typeSerialize(),
            'mean_message_view_count'          => $this->meanMessageViewCount->typeSerialize(),
            'mean_message_share_count'         => $this->meanMessageShareCount->typeSerialize(),
            'mean_message_reaction_count'      => $this->meanMessageReactionCount->typeSerialize(),
            'mean_story_view_count'            => $this->meanStoryViewCount->typeSerialize(),
            'mean_story_share_count'           => $this->meanStoryShareCount->typeSerialize(),
            'mean_story_reaction_count'        => $this->meanStoryReactionCount->typeSerialize(),
            'enabled_notifications_percentage' => $this->enabledNotificationsPercentage,
            'member_count_graph'               => $this->memberCountGraph->typeSerialize(),
            'join_graph'                       => $this->joinGraph->typeSerialize(),
            'mute_graph'                       => $this->muteGraph->typeSerialize(),
            'view_count_by_hour_graph'         => $this->viewCountByHourGraph->typeSerialize(),
            'view_count_by_source_graph'       => $this->viewCountBySourceGraph->typeSerialize(),
            'join_by_source_graph'             => $this->joinBySourceGraph->typeSerialize(),
            'language_graph'                   => $this->languageGraph->typeSerialize(),
            'message_interaction_graph'        => $this->messageInteractionGraph->typeSerialize(),
            'message_reaction_graph'           => $this->messageReactionGraph->typeSerialize(),
            'story_interaction_graph'          => $this->storyInteractionGraph->typeSerialize(),
            'story_reaction_graph'             => $this->storyReactionGraph->typeSerialize(),
            'instant_view_interaction_graph'   => $this->instantViewInteractionGraph->typeSerialize(),
            array_map(fn($x) => $x->typeSerialize(), $this->recentInteractions),
        ];
    }
}
