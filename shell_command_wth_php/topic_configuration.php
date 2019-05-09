<?php
$path='/usr/bin/';
$command_topic=$path."kafka-topics --list --zookeeper localhost:2181";
$command_topic = $path.'kafka-topics --zookeeper localhost:2181 --describe --topic sugar.adressen';
//$command_topic=$path."kafka-topics.sh --create --zookeeper localhost:2181 --replication-factor 1 --partitions 1 --topic NewtopicName";<br/>
$output_topic=shell_exec($command_topic);
var_dump($output_topic);
