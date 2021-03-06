<?php
//菜单及其权限
return [
    [
        "name" => "首页",
        "id"   => "index",
        "type" => "link",
        "icon" => "oi-home",
        "link" => "admin/index/index",
        "auth" => 1,
    ],
    [
        "name" => "发布",
        "id"   => "rel",
        "type" => "group",
        "icon" => "oi-pencil",
        "child"=> [
            [
                "name" => "模组发布",
                "link" => "admin/mods/create",
                "auth" => "3",
            ],
            [
                "name" => "文章发布",
                "link" => "admin/article/create",
                "auth" => "3",
            ]
        ]
    ],
    [
        "name" => "内容",
        "id"   => "cont",
        "type" => "group",
        "icon" => "oi-document",
        "child"=> [
            [
                "name" => "所有文章",
                "link" => "admin/article/index",
                "auth" => "3",
            ],
            [
                "name" => "所有模组",
                "link" => "admin/mods/index",
                "auth" => "3",
            ],
            [
                "name" => "板块管理",
                "link" => "admin/plate/index",
                "auth" => "4",
            ],
            [
                "name" => "审核中心",
                "link" => "admin/audit/index",
                "auth" => "4",
            ]
        ]
    ],
    [ 
        "name" => "评论", 
        "id"   => "comment",
        "type" => "group",
        "icon" => "oi-chat",
        "child"=> [
            [ 
                "name" => "全部评论", 
                "link" => "admin/comment/index",
                "auth" => "1",
            ],
        ]
    ],
    [
        "name" => "用户",
        "id"   => "user",
        "type" => "group",
        "icon" => "oi-people",
        "child"=> [
            [
                "name" => "全部用户",
                "link" => "admin/user/index",
                "auth" => "5",
            ],
            [
                "name" => "个人中心",
                "link" => "admin/user/center",
                "auth" => "1",
            ],
        ]
    ],
    [
        "name" => "外观",
        "id"   => "brush",
        "type" => "group",
        "icon" => "oi-brush",
        "child"=> [
            [
                "name" => "封面设置",
                "link" => "admin/brush/index",
                "auth" => "5",
            ],
            [
                "name" => "首页banana设置", 
                "link" => "admin/brush/banana",
                "auth" => "5",
            ], 
            [
                "name" => "菜单设置",
                "link" => "admin/brush/menu",
                "auth" => "5",
            ],
            [
                "name" => "页脚",
                "link" => "admin/brush/footer",
                "auth" => "5",
            ],
        ]
    ],
    [
        "name" => "系统",
        "id"   => "system",
        "type" => "group",
        "icon" => "oi-cog",
        "child"=> [
            [
                "name" => "常规设置",
                "link" => "admin/system/index",
                "auth" => "5",
            ],
            [
                "name" => "META标签",
                "link" => "admin/system/meta",
                "auth" => "5",
            ],
            [
                "name" => "邮件设置", 
                "link" => "admin/system/mail",
                "auth" => "5",
            ],
        ]
    ],

];
