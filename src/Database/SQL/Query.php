<?php namespace Redub\Database\SQL
{
	class Query
	{
		/**
		 *
		 */
		protected $action = NULL;


		/**
		 *
		 */
		protected $driver = NULL;


		/**
		 *
		 */
		protected $from = NULL;


		/**
		 *
		 */
		protected $fromAliases = array();


		/**
		 *
		 */
		protected $fromIdentifiers = NULL;


		/**
		 *
		 */
		protected $join = NULL;


		/**
		 *
		 */
		protected $limit = NULL;


		/**
		 *
		 */
		protected $offset = NULL;


		/**
		 *
		 */
		protected $order = NULL;


		/**
		 *
		 */
		protected $select = NULL;


		/**
		 *
		 */
		protected $selectAliases = array();


		/**
		 *
		 */
		protected $selectIdentifiers = array();


		/**
		 *
		 */
		protected $tokens = array();


		/**
		 *
		 */
		protected $where = NULL;


		/**
		 *
		 */
		public function __construct($sql = NULL, PlatformInterface $platform = NULL)
		{
			$this->sql = $sql;

			if ($platform) {
				$platform->parse($this);
			}
		}


		/**
		 *
		 */
		public function addSelect($identifier, $alias = NULL)
		{
			$this->selectAliases[]     = $alias;
			$this->selectIdentifiers[] = $item;
		}


		/**
		 *
		 */
		public function checkAction($action)
		{
			return $this->action == trim(strtoupper($action));
		}


		/**
		 *
		 */
		public function checkLimit()
		{
			return $this->limit !== NULL;
		}


		/**
		 *
		 */
		public function checkOffset()
		{
			return $this->offset !== NULL;
		}


		/**
		 *
		 */
		public function getLimit()
		{
			return $this->limit;
		}


		/**
		 *
		 */
		public function getOffset()
		{
			return $this->offset;
		}


		/**
		 *
		 */
		public function getSql()
		{
			return $this->sql;
		}


		/**
		 *
		 */
		public function setAction($action)
		{
			$this->action = strtoupper($action);
		}


		/**
		 *
		 */
		public function setFrom($from)
		{
			$this->resetFrom();

			$this->from = $from;

			return $this;
		}


		/**
		 *
		 */
		public function setJoin($join)
		{
			$this->resetJoin();

			$this->join = $join;

			return $this;
		}


		/**
		 *
		 */
		public function setLimit($limit)
		{
			$this->limit = $limit;

			return $this;
		}


		/**
		 *
		 */
		public function setOffset($offset)
		{
			$this->offset = $offset;

			return $this;
		}


		/**
		 *
		 */
		public function setOrder($order)
		{
			$this->resetOrder();

			$this->order = $order;

			return $this;
		}


		/**
		 *
		 */
		public function setSelect($select)
		{
			$this->resetSelect();

			$this->select = $select;

			return $this;
		}


		/**
		 *
		 */
		public function setWhere($where)
		{
			$this->resetWhere();

			$this->where = $where;

			return $this;
		}


		/**
		 *
		 */
		protected function resetSelect()
		{
			$this->selectAliases     = array();
			$this->selectIdentifiers = array();
		}
	}
}
