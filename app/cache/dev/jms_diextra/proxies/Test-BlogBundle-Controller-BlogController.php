<?php

namespace EnhancedProxyeefb060b_931ddbf738695c6df28af34aff96a5cc1a264802\__CG__\Test\BlogBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class BlogController extends \Test\BlogBundle\Controller\BlogController
{
    private $__CGInterception__loader;

    public function supprimerAction($id)
    {
        $ref = new \ReflectionMethod('Test\\BlogBundle\\Controller\\BlogController', 'supprimerAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($id), $interceptors);

        return $invocation->proceed();
    }

    public function modifierAction($id)
    {
        $ref = new \ReflectionMethod('Test\\BlogBundle\\Controller\\BlogController', 'modifierAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($id), $interceptors);

        return $invocation->proceed();
    }

    public function ajouterAction()
    {
        $ref = new \ReflectionMethod('Test\\BlogBundle\\Controller\\BlogController', 'ajouterAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}