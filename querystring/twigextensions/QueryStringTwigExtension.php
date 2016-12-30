<?php
namespace Craft;
use Twig_Extension;
use Twig_Filter_Method;
class QueryStringTwigExtension extends \Twig_Extension
{
		public function getName()
		{
				return 'querystring';
		}
		public function getFilters()
		{
				return array(
						'querystring' => new Twig_Filter_Method($this, 'querystring'),
				);
		}
		public function querystring($querystring, $replacementArray)
		{
				unset($querystring['p']);
				foreach ($replacementArray as $key => $value) {
						if ($value) {
								$querystring[$key] = $value;
						} else {
							unset($querystring[$key]);
						}
				}
				return http_build_query($querystring);
		}
}
