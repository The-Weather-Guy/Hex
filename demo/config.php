<?php
$config['core'] = array(
	"server" => "irc.x10hosting.com:6667",
	"channels" => "#x10bot,#x10bot-backend",
	"nick" => "x10Bot[demo]",
	"nickserv" => "leetx10",
	"serverpass" => "",
	"date" => "Europe/London",
	"debug" => true,
	"debugchan" => "#x10bot-backend", //For core debugging
);
$config['irclog'] = array(
	'file_location' => './irc.log',
	'format' => 'plaintext',
	'line_format' => '[%1$s] #%2$s - %3$s - %4$s', // order of parameters: time, channel, user, text
);
$config['botlog'] = array(
	'file_location' => './bot.log',
	'channel_location' => '#x10bot-backend',
	'format' => 'plaintext',
	'line_format' => '(%1$s) [%2$s] %3$s#%4$s - %5$s', // order of parameters: time, level, module, location, text, trace
	'channel_format' => '[%2$s] %3$s#%4$s - %5$s', // order of parameters: time, level, module, location, text, trace
	'memo_format' => '[%2$s] %3$s#%4$s - %5$s', // order of parameters: time, level, module, location, text, trace
	'email_body_format' => 'At %1$s \n\n There was a #%2$s level message logged. %3$s raised the message at the %4$s location.\nHere are the details: \t%5$s \n\n Trace: %6$s', // order of parameters: time, level, module, location, text, trace
	'email_subject_format' => 'x10bot - %2$1 - %3$s', // order of parameters: time, level, module, location, text, trace
	'file_level' => 1,
	'channel_level' => 1,
	'memo_level' => 4,
	'email_level' => 4,
);
$config['email'] = array(
);