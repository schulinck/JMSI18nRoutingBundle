<?php
namespace JMS\I18nRoutingBundle\Router;

use Symfony\Component\Routing\RouteCollection as SymfonyRouteCollection;

class RouteCollection extends SymfonyRouteCollection
{
	/**
	 * @var string
	 */
	private $locale;

	/**
	 * @param string $locale
	 */
	public function __construct($locale)
	{
		$this->locale = $locale;
	}

	/**
	 * {@inheritdoc}
	 */
	public function get($name)
	{
		$name = $this->locale.I18nLoader::ROUTING_PREFIX.$name;

		return parent::get($name);
	}
}
