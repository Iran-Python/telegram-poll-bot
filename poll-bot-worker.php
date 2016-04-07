<?php

set_time_limit(0);

require_once 'PollBot.php';

define('BOT_TOKEN', '195980847:AAENfGy_AJCW4JY7D5H66q9hBqWRSQKaCBE');

$bot = new PollBot(BOT_TOKEN, 'PollBotChat');
$bot->runLongpoll();
