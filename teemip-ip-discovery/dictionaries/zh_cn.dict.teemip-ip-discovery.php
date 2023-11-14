<?php
/*
 * @copyright   Copyright (C) 2021 TeemIp
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

//////////////////////////////////////////////////////////////////////
// Classes in 'teemip-discovery Module'
//////////////////////////////////////////////////////////////////////
//

//
// Class: IPDiscovery
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
    'Class:IPDiscovery' => 'IP发现应用',
    'Class:IPDiscovery+' => '',
    'Class:IPDiscovery/Name' => '%1$s',
    'Class:IPDiscovery/ComplementaryName' => '%1$s - %2$s',
    'Class:IPDiscovery/Attribute:last_discovery_date' => '上次发现日期',
    'Class:IPDiscovery/Attribute:last_discovery_date+' => '上次运行发现的日期',
    'Class:IPDiscovery/Attribute:duration' => '持续时间',
    'Class:IPDiscovery/Attribute:duration+' => '上次发现运行所需的时间',
    'Class:IPDiscovery/Attribute:dhcp_range_discovery_enabled' => '启用DHCP范围发现',
    'Class:IPDiscovery/Attribute:dhcp_range_discovery_enabled+' => '',
    'Class:IPDiscovery/Attribute:dhcp_range_discovery_enabled/Value:yes' => '是',
    'Class:IPDiscovery/Attribute:dhcp_range_discovery_enabled/Value:no' => '否',
    'Class:IPDiscovery/Attribute:ping_enabled' => '启用Ping',
    'Class:IPDiscovery/Attribute:ping_enabled+' => '',
    'Class:IPDiscovery/Attribute:ping_enabled/Value:yes' => '是',
    'Class:IPDiscovery/Attribute:ping_enabled/Value:no' => '否',
    'Class:IPDiscovery/Attribute:ping_timeout' => 'Ping超时（秒）',
    'Class:IPDiscovery/Attribute:ping_timeout+' => '',
    'Class:IPDiscovery/Attribute:iplookup_enabled' => '启用IP查找',
    'Class:IPDiscovery/Attribute:iplookup_enabled/Value:yes' => '是',
    'Class:IPDiscovery/Attribute:iplookup_enabled/Value:no' => '否',
    'Class:IPDiscovery/Attribute:dns1' => 'DNS服务器 #1',
    'Class:IPDiscovery/Attribute:dns1+' => '',
    'Class:IPDiscovery/Attribute:dns2' => 'DNS服务器 #2',
    'Class:IPDiscovery/Attribute:dns2+' => '',
    'Class:IPDiscovery/Attribute:scan_enabled' => '启用扫描',
    'Class:IPDiscovery/Attribute:scan_enabled+' => '',
    'Class:IPDiscovery/Attribute:scan_enabled/Value:yes' => '是',
    'Class:IPDiscovery/Attribute:scan_enabled/Value:no' => '否',
    'Class:IPDiscovery/Attribute:port_number' => '端口号',
    'Class:IPDiscovery/Attribute:port_number+' => '',
    'Class:IPDiscovery/Attribute:protocol' => '协议',
    'Class:IPDiscovery/Attribute:protocol+' => '',
    'Class:IPDiscovery/Attribute:protocol/Value:udp' => 'UDP',
    'Class:IPDiscovery/Attribute:protocol/Value:tcp' => 'TCP',
    'Class:IPDiscovery/Attribute:protocol/Value:both' => '两者',
    'Class:IPDiscovery/Attribute:scan_timeout' => '扫描超时（秒）',
    'Class:IPDiscovery/Attribute:scan_timeout+' => '',
    'Class:IPDiscovery/Attribute:scan_cnx_refused_enabled' => '将"连接被拒绝"视为有效',
    'Class:IPDiscovery/Attribute:scan_cnx_refused_enabled+' => '',
    'Class:IPDiscovery/Attribute:scan_cnx_refused_enabled/Value:yes' => '是',
    'Class:IPDiscovery/Attribute:scan_cnx_refused_enabled/Value:no' => '否',
    'Class:IPDiscovery/Attribute:ipv4subnets_list' => '管理的IPv4子网',
    'Class:IPDiscovery/Attribute:ipv4subnets_list+' => '',
    'Class:IPDiscovery:baseinfo' => '基本信息',
    'Class:IPDiscovery:operation' => '操作',
    'Class:IPDiscovery:pinginfo' => 'Ping功能',
    'Class:IPDiscovery:iplookupinfo' => 'IP查找功能',
    'Class:IPDiscovery:scaninfo' => '扫描功能',
));

//
// Class: IPSubnet
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
    'Class:IPSubnet/Attribute:ipdiscovery_id' => 'IP发现应用',
    'Class:IPSubnet/Attribute:ipdiscovery_id+' => '',
    'Class:IPSubnet/Attribute:ipdiscovery_name' => 'IP发现应用',
    'Class:IPSubnet/Attribute:ipdiscovery_name+' => '',
    'Class:IPSubnet/Attribute:ipdiscovery_enabled' => '启用发现',
    'Class:IPSubnet/Attribute:ipdiscovery_enabled+' => '',
    'Class:IPSubnet/Attribute:ipdiscovery_enabled/Value:yes' => '是',
    'Class:IPSubnet/Attribute:ipdiscovery_enabled/Value:no' => '否',
    'Class:IPSubnet/Attribute:last_discovery_date' => '上次发现日期',
    'Class:IPSubnet/Attribute:last_discovery_date+' => '子网上次被发现的日期',
    'Class:IPSubnet/Attribute:ipdiscovery_dhcp_range_discovery_enabled' => '启用IP发现的DHCP范围发现',
    'Class:IPSubnet/Attribute:ipdiscovery_dhcp_range_discovery_enabled+' => '',
    'Class:IPSubnet/Attribute:ipdiscovery_ping_enabled' => '启用IP发现的Ping',
    'Class:IPSubnet/Attribute:ipdiscovery_ping_enabled+' => '',
    'Class:IPSubnet/Attribute:ipdiscovery_iplookup_enabled' => '启用IP发现的IP查找',
    'Class:IPSubnet/Attribute:ipdiscovery_iplookup_enabled+' => '',
    'Class:IPSubnet/Attribute:ipdiscovery_scan_enabled' => '启用IP发现的扫描',
    'Class:IPSubnet/Attribute:ipdiscovery_scan_enabled+' => '',
    'Class:IPSubnet/Attribute:ipdiscovery_scan_cnx_refused_enabled' => 'IP发现将扫描"连接被拒绝"视为有效',
    'Class:IPSubnet/Attribute:ipdiscovery_scan_cnx_refused_enabled+' => '',
    'Class:IPSubnet/Attribute:dhcp_range_discovery_enabled' => '子网的DHCP范围发现已启用',
    'Class:IPSubnet/Attribute:dhcp_range_discovery_enabled+' => '',
    'Class:IPSubnet/Attribute:dhcp_range_discovery_enabled/Value:yes' => '是',
    'Class:IPSubnet/Attribute:dhcp_range_discovery_enabled/Value:no' => '否',
    'Class:IPSubnet/Attribute:ping_enabled' => '子网的Ping已启用',
    'Class:IPSubnet/Attribute:ping_enabled+' => '',
    'Class:IPSubnet/Attribute:ping_enabled/Value:yes' => '是',
    'Class:IPSubnet/Attribute:ping_enabled/Value:no' => '否',
    'Class:IPSubnet/Attribute:iplookup_enabled' => '子网的IP查找已启用',
    'Class:IPSubnet/Attribute:iplookup_enabled+' => '',
    'Class:IPSubnet/Attribute:iplookup_enabled/Value:yes' => '是',
    'Class:IPSubnet/Attribute:iplookup_enabled/Value:no' => '否',
    'Class:IPSubnet/Attribute:scan_enabled' => '子网的扫描已启用',
    'Class:IPSubnet/Attribute:scan_enabled+' => '',
    'Class:IPSubnet/Attribute:scan_enabled/Value:yes' => '是',
    'Class:IPSubnet/Attribute:scan_enabled/Value:no' => '否',
    'Class:IPSubnet/Attribute:ping_duration' => 'Ping持续时间',
    'Class:IPSubnet/Attribute:ping_duration+' => '上次发现对子网进行ping所需的时间',
    'Class:IPSubnet/Attribute:iplookup_duration' => 'IP查找持续时间',
    'Class:IPSubnet/Attribute:iplookup_duration+' => '上次发现对子网进行IP查找所需的时间',
    'Class:IPSubnet/Attribute:scan_duration' => '扫描持续时间',
    'Class:IPSubnet/Attribute:scan_duration+' => '上次发现对子网进行扫描所需的时间',
    'Class:IPSubnet/Attribute:ping_discovered' => 'Ping #',
    'Class:IPSubnet/Attribute:ping_discovered+' => '通过ping发现的IP数量',
    'Class:IPSubnet/Attribute:iplookup_discovered' => 'IP查找 #',
    'Class:IPSubnet/Attribute:iplookup_discovered+' => '通过IP查找发现的IP数量',
    'Class:IPSubnet/Attribute:scan_discovered' => '扫描 #',
    'Class:IPSubnet/Attribute:scan_discovered+' => '通过扫描发现的IP数量',
    'Class:IPSubnet/Attribute:scan_cnx_refused_enabled' => '将扫描"连接被拒绝"视为有效',
    'Class:IPSubnet/Attribute:scan_cnx_refused_enabled+' => '',
    'Class:IPSubnet/Attribute:scan_cnx_refused_enabled/Value:yes' => '是',
    'Class:IPSubnet/Attribute:scan_cnx_refused_enabled/Value:no' => '否',
    'Class:IPSubnet:discoveryapp' => '发现：应用程序参数',
    'Class:IPSubnet:discoverysubnet' => '发现：子网参数',
    'Class:IPSubnet:discoverystats' => '发现：统计信息',
));

//
// Class: IPAddress
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
    'Class:IPAddress/Attribute:last_discovery_date' => '上次发现日期',
    'Class:IPAddress/Attribute:last_discovery_date+' => 'IP上次被发现的日期',
    'Class:IPAddress/Attribute:responds_to_ping' => '响应Ping',
    'Class:IPAddress/Attribute:responds_to_ping+' => '',
    'Class:IPAddress/Attribute:responds_to_ping/Value:yes' => '是',
    'Class:IPAddress/Attribute:responds_to_ping/Value:no' => '否',
    'Class:IPAddress/Attribute:responds_to_ping/Value:na' => 'N/A',
    'Class:IPAddress/Attribute:responds_to_iplookup' => '响应IP查找',
    'Class:IPAddress/Attribute:responds_to_iplookup+' => '',
    'Class:IPAddress/Attribute:responds_to_iplookup/Value:yes' => '是',
    'Class:IPAddress/Attribute:responds_to_iplookup/Value:no' => '否',
    'Class:IPAddress/Attribute:responds_to_iplookup/Value:na' => 'N/A',
    'Class:IPAddress/Attribute:fqdn_from_iplookup' => '从IP查找获取的FQDN',
    'Class:IPAddress/Attribute:fqdn_from_iplookup+' => '',
    'Class:IPAddress/Attribute:responds_to_scan' => '响应扫描',
    'Class:IPAddress/Attribute:responds_to_scan+' => '',
    'Class:IPAddress/Attribute:responds_to_scan/Value:yes' => '是',
    'Class:IPAddress/Attribute:responds_to_scan/Value:no' => '否',
    'Class:IPAddress/Attribute:responds_to_scan/Value:cnx_refused' => '连接被拒绝',
    'Class:IPAddress/Attribute:responds_to_scan/Value:na' => 'N/A',
    'Class:IPAddress:discoveryinfo' => '发现信息',
));


//
// Class: IPv4Address
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:IPv4Address/Attribute:ipdiscovery_name' => 'IP发现应用',
));

//
// Application Menu
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Menu:IPDiscovery' => 'IP发现',
	'Menu:IPDiscoveryApplication' => 'IP发现应用',
	'Menu:IPDiscoveryApplication+' => '所有IP发现应用',
	'Menu:IPDiscovery:IPv4Statistics' => 'IPv4统计信息',
	'Menu:IPDiscovery:IPv6Statistics' => 'IPv6统计信息',
	'Menu:IPDiscovery:IPv4Status' => 'IPv4地址状态',
	'Menu:IPDiscovery:IPv4Ping' => '可以ping通的IPv4地址',
	'Menu:IPDiscovery:IPv4Scan' => '回应扫描的IPv4地址',
	'Menu:IPDiscovery:IPv4Lookup' => '带有DNS记录的IPv4地址',
	'Menu:IPDiscovery:IPv6Status' => 'IPv6地址状态',
	'Menu:IPDiscovery:IPv6Ping' => '可以ping通的IPv6地址',
	'Menu:IPDiscovery:IPv6Scan' => '回应扫描的IPv6地址',
	'Menu:IPDiscovery:IPv6Lookup' => '带有DNS记录的IPv6地址',
	'Menu:IPDiscovery:IPv4DiscoveredSubnets' => '与IP发现应用关联的IPv4子网',
	'Menu:IPDiscovery:IPv6DiscoveredSubnets' => '与IP发现应用关联的IPv6子网',
	'UI:IPDiscovery:Action:New:UUIDCollision' => 'UUID在整个TeemIp中必须是唯一的！',
	'UI:IPDiscovery:Action:New:ScanWithNoPort' => '启用扫描功能时必须指定端口号！',
	'UI:IPDiscovery:Action:ExplodeFQDN:IPv4Subnet' => '展开IPv4子网中发现的IP的FQDN',
	'UI:IPDiscovery:Action:ExplodeFQDN:IPv6Subnet' => '展开IPv6子网中发现的IP的FQDN',
	'UI:IPDiscovery:Action:ExplodeFQDN:IPv4Range' => '展开IPv4范围中发现的IP的FQDN',
	'UI:IPDiscovery:Action:ExplodeFQDN:IPv6Range' => '展开IPv6范围中发现的IP的FQDN',
	'UI:IPDiscovery:Action:ExplodeFQDN:IPAddress' => '展开发现的IP的FQDN',
));

