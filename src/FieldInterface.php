<?php
/*
 * This file is part of the Structor package.
 *
 * (c) Christoph Kappestein <christoph.kappestein@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE file 
 * that was distributed with this source code.
 */

namespace PSX\Structor;

/**
 * FieldInterface
 *
 * @author Christoph Kappestein <christoph.kappestein@gmail.com>
 */
interface FieldInterface
{
    /**
     * Returns the value
     *
     * @param array $context
     * @return array
     */
    public function getResult(array $context = null);
}
