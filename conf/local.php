<?php
/*
 * Dokuwiki's Main Configuration File - Local Settings
 * Auto-generated by config plugin
 * Run for user: Fusl
 * Date: Wed, 16 Aug 2017 05:16:23 +0000
 */

$conf['title'] = 'OpenNIC Wiki';
$conf['template'] = 'bootstrap3';
$conf['license'] = 'cc-by-sa';
$conf['basedir'] = '/';
$conf['baseurl'] = 'https://wiki.opennic.org';
$conf['recent'] = 50;
$conf['recent_days'] = 3650;
$conf['breadcrumbs'] = 0;
$conf['youarehere'] = 1;
$conf['fullpath'] = 1;
$conf['dformat'] = '%Y-%m-%dT%H:%M:SZ';
$conf['toptoclevel'] = '2';
$conf['tocminheads'] = '1';
$conf['maxtoclevel'] = '5';
$conf['maxseclevel'] = '5';
$conf['useheading'] = '1';
$conf['useacl'] = 1;
$conf['autopasswd'] = 0;
$conf['authtype'] = 'authldap';
$conf['passcrypt'] = 'bcrypt';
$conf['superuser'] = '@wikiAdmin';
$conf['manager'] = '@wikiAdmin';
$conf['profileconfirm'] = 0;
$conf['disableactions'] = 'resendpwd,profile,profile_delete,subscribe,unsubscribe';
$conf['usewordblock'] = 0;
$conf['relnofollow'] = 0;
$conf['indexdelay'] = 0;
$conf['locktime'] = 900;
$conf['cachetime'] = 86400;
$conf['fetchsize'] = 1048576;
$conf['subscribe_time'] = 86400;
$conf['rss_type'] = 'rss2';
$conf['rss_update'] = 900;
$conf['updatecheck'] = 0;
$conf['userewrite'] = '1';
$conf['useslash'] = 1;
$conf['send404'] = 1;
$conf['readdircache'] = 300;
$conf['dnslookups'] = 0;
$conf['jquerycdn'] = 'cdnjs';
$conf['plugin']['bootswrapper']['loadBootstrap'] = 1;
$conf['plugin']['captcha']['mode'] = 'image';
$conf['plugin']['captcha']['lettercount'] = 4;
$conf['plugin']['captcha']['width'] = 250;
$conf['plugin']['captcha']['height'] = 50;
$conf['plugin']['authldap']['server'] = 'ldaps://ldap.sourpuss.net';
$conf['plugin']['authldap']['port'] = 636;
$conf['plugin']['authldap']['usertree'] = 'o=users, dc=opennic,dc=glue';
$conf['plugin']['authldap']['grouptree'] = 'o=groups, dc=opennic,dc=glue';
$conf['plugin']['authldap']['userfilter'] = '(&(uid=%{user})(objectClass=CourierMailAccount))';
$conf['plugin']['authldap']['groupfilter'] = '(&(cn=wikiAdmin)(member=%{dn}))';
$conf['plugin']['authldap']['version'] = 3;
$conf['plugin']['authldap']['binddn'] = 'uid=dokuwiki,o=users,dc=opennic,dc=glue';
$conf['plugin']['authldap']['modPass'] = 0;
$conf['tpl']['bootstrap3']['bootstrapTheme'] = 'bootswatch';
$conf['tpl']['bootstrap3']['bootswatchTheme'] = 'flatly';
$conf['tpl']['bootstrap3']['showSemanticPopup'] = 1;
$conf['tpl']['bootstrap3']['fluidContainerBtn'] = 1;
$conf['tpl']['bootstrap3']['tocAffix'] = 0;
$conf['tpl']['bootstrap3']['tocCollapseSubSections'] = 0;
$conf['tpl']['bootstrap3']['tocCollapseOnScroll'] = 0;
$conf['tpl']['bootstrap3']['tocCollapsed'] = 1;
$conf['tpl']['bootstrap3']['pageInfoDateFormat'] = 'human';
$conf['tpl']['bootstrap3']['showPageIcons'] = 1;

// end auto-generated content
