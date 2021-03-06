<?php
namespace Test\BlogBundle\Validator;

use Symfony\Component\Validator\Constraint;

/**
 * Class AntiFlood
 * @package Test\BlogBundle\Validator
 * @Annotation
 */

class AntiFlood extends Constraint
{
    public $message = "Vous avez déjà posté un message il y a moins de 15 secondes, merci d'attendre un peu";

    public function validatedBy()
    {
        return 'testblog_antiflood';
    }
}