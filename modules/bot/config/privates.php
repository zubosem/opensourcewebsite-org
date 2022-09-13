<?php

use app\modules\bot\components\PrivateRouteResolver;

//use yii\helpers\ArrayHelper;

//$common = require __DIR__ . '/common.php';

$config = [
    'components' => [
        'commandRouteResolver' => [
            'class' => PrivateRouteResolver::class,
            'rules' => [
                '/start( <start:.+>)?' => 'start/index',
                '/hello' => 'start/index',
                '/sos' => 'start/index',
                '/my_rank' => 'my-rating/index',
                '/<controller:\w+>__<action:\w+>(\?<query:(&?\w+=[^&]*)*>)?( <message:.+>)?' => '<controller>/<action>',
                '/<controller:\w+>(\?<query:(&?\w+=[^&]*)*>)?( <message:.+>)?' => '<controller>/index',
            ],
            'controllers' => [
                'start',
                'help',
                'menu',
                'user',
                'language',
                'services',
                'my_account',
                'my_profile',
                'group_guest',
                'member_review',
                'group_guest_faq',
                'member',
                'group_timezone',
                'group_currency',
                'channel_guest_marketplace',
                'group_guest_marketplace',
                'channel_marketplace',
                'group_marketplace',
                'group_membership',
                'group_limiter',
                'group_slow_mode',
                'channel',
                'group',
                'wallet',
                'message',
            ],
            'actions' => [
                'index',
                'list',
                'view',
                'create',
                'edit',
                'update',
                'delete',
                'select',
                'input_intro_text',
                'delete_intro',
                'public_groups',
                'members_with_intro',
                'members_with_reviews',
                'word_list',
                'premium_members',
                'id',
                'input',
                'set_status',
                'set_title',
                'set_text',
                'set_text_hint',
                'set_mode',
                'set_tag',
                'tag_list_word_list',
                'update_post',
                'send_post',
                'set_messages_limit',
                'input_member_messages_limit',
                'delete_member_messages_limit',
                'set_member_note',
                'delete_member_note',
                'input_member_date',
                'delete_member_date',
                'member',
                'set_time',
                'set_skip_days',
                'members_with_buttons',
                'input_member',
                'add_link',
                'link',
                'set_link_title',
                'set_link_url',
                'delete_link',
                'send_transaction',
                'transactions',
                'set',
                'set_level',
            ],
        ],
    ],
];

//$config have more priority than $common
//$config = ArrayHelper::merge($common, $config);

return $config;
