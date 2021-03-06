<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2017 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: Dean <zxxjjforever@163.com>
// +----------------------------------------------------------------------
return [
    'accessKey'                 => [// 在后台插件配置表单中的键名 ,会是config[text]
        'title' => 'AccessKey', // 表单的label标题
        'type'  => 'text',// 表单的类型：text,password,textarea,checkbox,radio,select等
        'value' => '',// 表单的默认值
        'tip'   => '<a href="https://portal.qiniu.com/signup?code=3lfihpz361o42" target="_blank">马上获取</a>,充值使用ThinkCMF七牛专属优惠码<a href="http://www.thinkcmf.com/qiniu/promotion_code.html" target="_blank">507670e8</a>有更多优惠' //表单的帮助提示
    ],
    'secretKey'                 => [// 在后台插件配置表单中的键名 ,会是config[password]
        'title' => 'SecretKey',
        'type'  => 'text',
        'value' => '',
        'tip'   => '<a href="https://portal.qiniu.com/signup?code=3lfihpz361o42" target="_blank">马上获取</a>'
    ],
    'protocol'                  => [// 在后台插件配置表单中的键名 ,会是config[select]
        'title'   => '域名协议',
        'type'    => 'select',
        'options' => [//select 和radio,checkbox的子选项
            'http'  => 'http',// 值=>显示
            'https' => 'https',
        ],
        'value'   => 'http',
        'tip'     => ''
    ],
    'domain'                    => [
        'title' => '空间域名',
        'type'  => 'text',
        'value' => '',
        'tip'   => ''
    ],
    'bucket'                    => [
        'title' => '空间名称',
        'type'  => 'text',
        'value' => '',
        'tip'   => ''
    ],
    'style_separator'           => [
        'title' => '样式分隔符',
        'type'  => 'text',
        'value' => '!',
        'tip'   => ''
    ],
    'styles.watermark'          => [
        'title' => '样式-水印',
        'type'  => 'text',
        'value' => 'watermark',
        'tip'   => '请到七牛存储空间->图片样式：添加此样式名称，并进行相应设置'
    ],
    'styles.avatar'             => [
        'title' => '样式-头像',
        'type'  => 'text',
        'value' => 'avatar',
        'tip'   => '请到七牛存储空间->图片样式：添加此样式名称，并进行相应设置 处理接口:<br>imageView2/1/w/100/h/100/interlace/0/q/100'
    ],
    'styles.thumbnail120x120'   => [
        'title' => '样式-缩略图120x120',
        'type'  => 'text',
        'value' => 'thumbnail120x120',
        'tip'   => '请到七牛存储空间->图片样式：添加此样式名称，并进行相应设置<br>处理接口:<br>imageView2/1/w/120/h/120/interlace/0/q/100'
    ],
    'styles.thumbnail300x300'   => [
        'title' => '样式-缩略图300x300',
        'type'  => 'text',
        'value' => 'thumbnail300x300',
        'tip'   => '请到七牛存储空间->图片样式：添加此样式名称，并进行相应设置<br>处理接口:<br>imageView2/1/w/300/h/300/interlace/0/q/100'
    ],
    'styles.thumbnail640x640'   => [
        'title' => '样式-缩略图640x640',
        'type'  => 'text',
        'value' => 'thumbnail640x640',
        'tip'   => '请到七牛存储空间->图片样式：添加此样式名称，并进行相应设置<br>处理接口:<br>imageView2/1/w/640/h/640/interlace/0/q/100'
    ],
    'styles.thumbnail1080x1080' => [
        'title' => '样式-缩略图1080x1080',
        'type'  => 'text',
        'value' => 'thumbnail1080x1080',
        'tip'   => '请到七牛存储空间->图片样式：添加此样式名称，并进行相应设置<br>处理接口:<br>imageView2/1/w/1080/h/1080/interlace/0/q/100'
    ],
];
					