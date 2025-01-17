<?php
/*
 * This file is part of DBUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Asserts the row count in a table
 *
 * @package    DbUnit
 * @author     Mike Lively <m@digitalsandwich.com>
 * @copyright  2010-2014 Mike Lively <m@digitalsandwich.com>
 * @license    http://www.opensource.org/licenses/BSD-3-Clause  The BSD 3-Clause License
 * @version    Release: @package_version@
 * @link       http://www.phpunit.de/
 * @since      Class available since Release 1.0.0
 */
class PHPUnit_Extensions_Database_Constraint_TableRowCount extends PHPUnit_Framework_Constraint
{
    /**
     * @var int
     */
    protected $value;

    /**
     * @var string
     */
    protected $tableName;

    /**
     * Creates a new constraint.
     *
     * @param $tableName
     * @param $value
     */
    public function __construct($tableName, $value)
    {
        $this->tableName = $tableName;
        $this->value = $value;
    }

    /**
     * Evaluates the constraint for parameter $other. Returns TRUE if the
     * constraint is met, FALSE otherwise.
     *
     * This method can be overridden to implement the evaluation algorithm.
     *
     * @param mixed $other Value or object to evaluate.
     * @return bool
     */
    protected function matches($other)
    {
        return $other == $this->value;
    }

    /**
     * Returns a string representation of the constraint.
     *
     * @return string
     */
    public function toString()
    {
        return sprintf('is equal to expected row count %d', $this->value);
    }
}
