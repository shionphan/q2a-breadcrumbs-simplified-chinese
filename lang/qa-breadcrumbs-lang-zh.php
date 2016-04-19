<?php
    /*
        Question2Answer (c) Gideon Greenspan
        Q2A Breadcrumbs (c) Amiya Sahu (developer.amiya@outlook.com)

        http://www.question2answer.org/


        File: qa-plugin/q2a-breadcrumbs/qa-breadcrumbs-lang-default.php
        Version: See define()s at top of qa-include/qa-base.php
        Description: Widget module class for AdSense widget plugin


        This program is free software; you can redistribute it and/or
        modify it under the terms of the GNU General Public License
        as published by the Free Software Foundation; either version 2
        of the License, or (at your option) any later version.

        This program is distributed in the hope that it will be useful,
        but WITHOUT ANY WARRANTY; without even the implied warranty of
        MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
        GNU General Public License for more details.

        More about this license: http://www.question2answer.org/license.php

        ---

        ## Add on 2016-04-19 by shionphan

        Packages Name: q2a-breadcrumbs Simplified Chinese packages
        Packages Description: Simplified Chinese packages for q2a-breadcrumbs
        Packages URI: https://github.com/shionphan/q2a-breadcrumbs-simplified-chinese/
        Packages Version: 1.0.0
        Packages Date: 2016-04-19
        Packages Author: Shionphan
        Packages Author URI: https://github.com/shionphan
        Packages: GPLv2
        Packages Minimum Question2Answer Version: 1.6
        Packages Donut theme Version: 1.6.3

    */

    /* don't allow this page to be requested directly from browser */
    if ( !defined( 'QA_VERSION' ) ) {
        header( 'Location: /' );
        exit;
    }

    return array(
        "opt_yes"                     => "是",
        "opt_no"                      => "否",
        "opt_truncate"                => "面包屑截断标题 ",
        "not_found"                   => "页面未找到",
        "recent_que"                  => "最新问题",
        "home"                        => "首页",
        "hot"                         => "热门问题",
        "most_votes"                  => "投票最多的问题",
        "most_answers"                => "回答最多的问题",
        "most_views"                  => "浏览最多的问题",
        "no_ans"                      => "暂无回答",
        "no_selected_ans"             => "暂无已采纳答案",
        "no_upvoted_ans"              => "暂无已投票答案",
        "questions"                   => "所有问题",
        "unanswered"                  => "待回复",
        "categories"                  => "分类",
        "tags"                        => "话题",
        "tag"                         => "话题",
        "users"                       => "用户",
        "user"                        => "用户",
        "ask"                         => "提一个问题",
        "save_changes"                => "保存变更",
        "custom_css"                  => "自定义CSS",
        "message"                     => "消息",
        "top_users"                   => "用户积分榜",
        "special"                     => "特殊用户",
        "blocked"                     => "已锁定用户",
        "activity"                    => "近期动态",
        "settings_saved"              => "面包屑设置已保存",
        "dont_use_link_for_last_elem" => "移除最后一个元素链接 (通常它已经是当前页面)",
        "searching_for"               => "搜索结果: ",
        "all_my_updates"              => "我的动态",
        "my_favorites"                => "收藏夹",
        "my_content"                  => "我的回答",
        "login"                       => "登录",
        "register"                    => "注册",
        "forgot"                      => "忘记密码",
        "messages"                    => "私信",
        "message"                     => "私信",
        "sent"                        => "已发送邮件",
        "inbox"                       => "收件箱",
        "message_for_x"               => "消息 : ^",
        "account"                     => "我的资料",
        "favorites"                   => "收藏夹",
        "answers"                     => "所有回答",
        "wall"                        => "笔记",
    );
