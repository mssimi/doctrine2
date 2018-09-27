<?php

namespace Doctrine\ORM\Mapping;

/**
 * @Annotation
 * @Target({"PROPERTY"})
 */
class InsertFormula
{
    /**
     * @var string
     *
     * @Required
     */
    public $formula;
}