<?php

namespace Test\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CategoryHolderType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('categories', 'entity', array(
            'class' => 'TestBlogBundle:Categorie',
            'choice_label' => 'nom',
            'multiple'=>true
        ));
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Test\BlogBundle\Entity\CategoryHolder'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'test_blogbundle_categorie_holder_type';
    }
}
