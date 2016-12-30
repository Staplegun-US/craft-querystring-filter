<?php
namespace Craft;

class QuerystringPlugin extends BasePlugin
{
	function getName()
	{
		return Craft::t('Querystring');
	}

	function getVersion()
	{
		return '0.1';
	}

	function getDeveloper()
	{
		return 'STAPLEGUN';
	}

	function getDeveloperUrl()
	{
		return 'http://staplegun.us';
	}

	public function addTwigExtension()
		{
				Craft::import('plugins.querystring.twigextensions.QueryStringTwigExtension');
				return new QueryStringTwigExtension();
		}
}
