<?php
/**
 * Created by PhpStorm.
 * User: hx
 * Date: 08/11/15
 * Time: 12:39
 */

namespace Test\BlogBundle\Validator;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class AntiFloodValidator extends ConstraintValidator
{

    public $request;
    public $em;

    public function __construct(Request $request, EntityManager $em)
    {
        $this->$request = $request;
        $this->em = $em;
    }

    /**
     * Checks if the passed value is valid.
     *
     * @param mixed $value The value that should be validated
     * @param Constraint $constraint The constraint for the validation
     *
     * @api
     */
    public function validate($value, Constraint $constraint)
    {

        $ip = $this->request->server->get('REMOTE_ADDR');
        $isFlood = null; //Cf page 328, flemme intense.
        if(strlen($value) < 3){
            $this->context->addViolation($constraint->message);
        }
    }
}