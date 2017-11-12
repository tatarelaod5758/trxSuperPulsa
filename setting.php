<?php

class Setting {
	public function getChannelAccessToken(){
		$channelAccessToken = "GjpNINkqOZTxwSS+Fb8ASd6BaobIx7zV3SGGUDM4ynFQBXYr7e0KY1iYV2n+JGpzsFpHb+65AsH/CliRXoHkRrjYJmEatwNA97/aIm8FHCVgy6IA7roRWd3cXrEywyMgIjHBBhoU9fbULH35qcbKvwdB04t89/1O/w1cDnyilFU=";
		return $channelAccessToken;
	}
	public function getChannelSecret(){
		$channelSecret = "a8547205e99263f1808089c9911c0292";
		return $channelSecret;
	}
	public function getApiReply(){
		$api = "https://api.line.me/v2/bot/message/reply";
		return $api;
	}
	public function getApiPush(){
		$api = "https://api.line.me/v2/bot/message/push";
		return $api;
	}
}