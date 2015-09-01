<?php
/*******************************************************************
* Glype is copyright and trademark 2007-2015 UpsideOut, Inc. d/b/a Glype
* and/or its licensors, successors and assigners. All rights reserved.
*
* Use of Glype is subject to the terms of the Software License Agreement.
* http://www.glype.com/license.php
*******************************************************************
* Our settings file. Self-explanatory - stores the config values.
*******************************************************************
* This file has been automatically generated by the glype admin tool.
* For a more complete and thorough explanation of options, consult
* the original settings.php file from the glype package.
******************************************************************/


/*****************************************************************
* 特殊选项
******************************************************************/

# 如果您已经购买了许可证，请在此输入您的许可证密钥。如果你没有许可证，则不填。
$CONFIG['license_key'] = '';

# BlockScript是保护并授权网站管理员阻止不需要的区域流量安全程序。
$CONFIG['enable_blockscript'] = false;


/*****************************************************************
* 安装选项
******************************************************************/

# 主题/皮肤使用，对应/主题/文件夹中的相应文件夹名称。
$CONFIG['theme'] = 'default';

# Run plugins on these websites
$CONFIG['plugins'] = 'facebook.com,google.com,hotmail.com,live.com,msn.com,myspace.com,twitter.com,yahoo.com,youtube.com,ytimg.com';

# Temporary directory used by the script. Many features require
# write permission to the temporary directory. Ensure this
# directory exists and is writable for best performance.
$CONFIG['tmp_dir'] = GLYPE_ROOT . '/tmp/';

# Use GZIP compression when sending pages back to the user. This
# reduces bandwidth usage but at the cost of increased CPU load.
$CONFIG['gzip_return'] = false;

# Warn users before browsing a secure site if on an insecure
# connection. This option has no effect if your proxy is on https.
$CONFIG['ssl_warning'] = false;

# The fastest and most reliable method of ensuring javascript is
# properly proxied is to override the native javascript functions
# with our own. However, this may interfere with any other
# javascript added to the page, such as ad codes.
$CONFIG['override_javascript'] = false;

# This option fetches the server load and stops the script serving
# pages whenever the server load goes over the limit specified. Set
# to 0 to disable this feature.
$CONFIG['load_limit'] = 0;

# Anything specified here will be added to the bottom of all
# proxied pages just before the </body> tag.
$CONFIG['footer_include'] = '';


/*****************************************************************
* URL编码选项
******************************************************************/

# Formats URLs as browse.php/aHR0... instead of
# browse.php?u=aHR0... Path info may not be available on all
# servers.
$CONFIG['path_info_urls'] = false;


/*****************************************************************
* 盗链
******************************************************************/

# This option prevents users "hotlinking" directly to a proxied
# page and forces all users to first visit the index page.
$CONFIG['stop_hotlinking'] = true;

# If the above option is enabled, you can add individual referrers
# that are allowed to bypass the hotlinking protection.
$CONFIG['hotlink_domains'] = array();


/*****************************************************************
* 记录
******************************************************************/

# Enable/disable the logging feature. If disabled, skip the rest of
# this section.
$CONFIG['enable_logging'] = false;

# Enter a destination for log files. A new log file will be created
# each day in the directory specified. The directory must be
# writable. To protect against unauthorized access, place the log
# folder above your webroot.
$CONFIG['logging_destination'] = $CONFIG['tmp_dir'] . 'logs/';

# You can avoid huge log files by only logging requests for .html
# pages, as per the default setting. If you want to log all
# requests (images, etc.) as well, enable this.
$CONFIG['log_all'] = false;


/*****************************************************************
* 网站访问控制
******************************************************************/

# Block everything except these websites
$CONFIG['whitelist'] = array();

# Block these websites
$CONFIG['blacklist'] = array();


/*****************************************************************
* 用户访问控制
******************************************************************/

# 
$CONFIG['ip_bans'] = array();


/*****************************************************************
* 传输选项
******************************************************************/

# Time to wait for while establishing a connection to the target
# server. If the connection takes longer, the transfer will be
# aborted.
$CONFIG['connection_timeout'] = 5;

# Time to allow for the entire transfer. You will need a longer
# time limit to download larger files.
$CONFIG['transfer_timeout'] = 0;

# Preserve bandwidth by limiting the size of files that can be
# downloaded through your proxy.
$CONFIG['max_filesize'] = 0;

# Preserve bandwidth by limiting the speed at which files are
# downloaded through your proxy. Note: if limiting download speed,
# you may need to increase the transfer timeout to compensate.
$CONFIG['download_speed_limit'] = 0;

# This forwards any requested ranges from the client and this makes
# it possible to resume previous downloads. Depending on the "Queue
# transfers" option below, it may also allow users to download
# multiple segments of a file simultaneously.
$CONFIG['resume_transfers'] = false;

# You can limit use of your proxy to allow only one transfer at a
# time per user. Disable this for faster browsing.
$CONFIG['queue_transfers'] = true;


/*****************************************************************
* Cookies
******************************************************************/

# If enabled, cookies will be stored in the folder specified below.
$CONFIG['cookies_on_server'] = false;

# If storing cookies on the server, specify a folder to save the
# cookie data in. To protect against unauthorized access, place the
# cookie folder above your webroot.
$CONFIG['cookies_folder'] = $CONFIG['tmp_dir'] . 'cookies/';

# You can encode cookie names, domains and values with this option
# for optimum privacy but at the cost of increased server load and
# larger cookie sizes. This option has no effect if storing cookies
# on server.
$CONFIG['encode_cookies'] = false;


/*****************************************************************
* 维护
******************************************************************/

# How often to clear the temporary files created by the script?
$CONFIG['tmp_cleanup_interval'] = 0;

# When should old log files be deleted? This option has no effect
# if the above option is disabled.
$CONFIG['tmp_cleanup_logs'] = 0;


/*****************************************************************
* 用户可配置选项
******************************************************************/

$CONFIG['options']['encodeURL'] = array(
	'title'	 => '加密URL',
	'desc'	 => '查看加密网页的URL',
	'default' => true,
	'force'	 => true
);

$CONFIG['options']['encodePage'] = array(
	'title'	 => '加密页面',
	'desc'	 => '有助于避免过滤器发送和接收JavaScript之前加密页面',
	'default' => true,
	'force'	 => true
);

$CONFIG['options']['showForm'] = array(
	'title'	 => '表现形式',
	'desc'	 => '每一页顶部的小表格，让您可以快速跳转到其他网站，而无需返回我们代理程序的主页',
	'default' => false,
	'force'	 => true
);

$CONFIG['options']['allowCookies'] = array(
	'title'	 => '允许 Cookies',
	'desc'	 => '交互式网站需要Cookies（尤其是在你登录网站时），但广告商还会使用Cookie来跟踪你的浏览习惯',
	'default' => true,
	'force'	 => true
);

$CONFIG['options']['tempCookies'] = array(
	'title'	 => '强迫临时cookies',
	'desc'	 => '这个选项将所有cookies过期日期设置为浏览的最后，即您关闭浏览器后所有的cookies将被删除（推荐）',
	'default' => true,
	'force'	 => true
);

$CONFIG['options']['stripTitle'] = array(
	'title'	 => '删除网页标题',
	'desc'	 => '删除代理页面的标题',
	'default' => true,
	'force'	 => true
);

$CONFIG['options']['stripJS'] = array(
	'title'	 => '删除脚本',
	'desc'	 => '删除脚本，以保护您的匿名性，加快页面加载（推荐）',
	'default' => false,
	'force'	 => true
);

$CONFIG['options']['stripObjects'] = array(
	'title'	 => '删除对象',
	'desc'	 => '您可以通过删除不必要的Flash，Java和其他对象提高页面加载时间。如果不消除，这些可能会影响你的匿名',
	'default' => false,
	'force'	 => true
);


/*****************************************************************
* Do not edit this section manually!
******************************************************************/

# Settings file version for determining compatibility with admin
# tool.
$CONFIG['version'] = '1.4.11';

//---PRESERVE ME---
// Anything below this line will be preserved when the admin control panel rewrites
// the settings. Useful for storing settings that don't/can't be changed from the control panel

$adminDetails['admin'] = 'a66abb5684c45962d887564f08346e8d';
