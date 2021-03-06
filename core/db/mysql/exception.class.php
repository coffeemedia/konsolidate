<?php

	/*
	 *            ________ ___        
	 *           /   /   /\  /\       Konsolidate
	 *      ____/   /___/  \/  \      
	 *     /           /\      /      http://www.konsolidate.nl
	 *    /___     ___/  \    /       
	 *    \  /   /\   \  /    \       Class:  CoreDBMySQLException
	 *     \/___/  \___\/      \      Tier:   Core
	 *      \   \  /\   \  /\  /      Module: DB/MySQL/Exception
	 *       \___\/  \___\/  \/       
	 *         \          \  /        $Rev$
	 *          \___    ___\/         $Author$
	 *              \   \  /          $Date$
	 *               \___\/           
	 */


	/**
	 *  MySQL specific Exception class
	 *  @name    CoreDBMySQLException
	 *  @type    class
	 *  @package Konsolidate
	 *  @author  Rogier Spieker <rogier@konsolidate.nl>
	 */
	class CoreDBMySQLException extends Exception
	{
		/**
		 *  The error message
		 *  @name    error
		 *  @type    string
		 *  @access  public
		 */
		public $error;

		/**
		 *  The error number
		 *  @name    error
		 *  @type    int
		 *  @access  public
		 */
		public $errno;
		
		/**
		 *  constructor
		 *  @name    __construct
		 *  @type    constructor
		 *  @access  public
		 *  @param   resource connection
		 *  @return  object
		 *  @syntax  object = &new CoreDBMySQLException( resource connection )
		 *  @note    This object is constructed by CoreDBMySQL as 'status report'
		 */
		public function __construct( &$rConnection )
		{
			$this->error = is_resource( $rConnection ) ? mysql_error( $rConnection ) : mysql_error();
			$this->errno = is_resource( $rConnection ) ? mysql_errno( $rConnection ) : mysql_errno();
		}
	}

?>