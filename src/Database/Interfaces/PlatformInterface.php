<?php namespace Redub\Database
{
	/**
	 * The most basic platform interface
	 *
	 * Platforms are responsible for parsing and composing query strings and objects, respectively.
	 * They should allow a compiled query to be parsed back into an object structure or allow an
	 * object structure to be composed back to a suitable statement for execution.
	 */
	interface PlatformInterface
	{
		/**
		 * Compose an executable statement for a driver
		 *
		 * @access public
		 * @param Query $query The query to compose
		 * @return mixed The executable statement for a driver using this platform
		 */
		public function compose(Query $query);


		/**
		 * Parse a query's statement an populate the query object
		 *
		 * This method should return a new query object, not the original.
		 *
		 * @access public
		 * @param Query $query The query to parse
		 * @return Query The parsed and populated query object
		 */
		public function parse(Query $query);
	}
}
