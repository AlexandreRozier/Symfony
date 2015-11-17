<?php

namespace Test\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Test\BlogBundle\Form\CategorieType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class ArticleType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $factory = $builder->getFormFactory();
        $builder
            ->add('titre')

            ->add('contenu','ckeditor')
            ->add('image', new ImageType(),array('required'=>false))
            ->add('categories','entity', array(
                'class' => 'TestBlogBundle:Categorie',
                'property'=>'nom',
                'multiple'=>true,
                'required'=>false))

            ->addEventListener(
                FormEvents::PRE_SET_DATA,
                function(FormEvent $event) use ($factory){
                    $article = $event->getData();
                    if (null === $article) {
                        return;
                    }
                    if(false === $article->getPublication()){
                        $event->getForm()->add(
                            $factory->createNamed('publication','checkbox',null,array('auto_initialize'=>false,'required'=>false)));
                    } else {
                        $event->getForm()->remove('publication');
                    }

                }
            );

    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Test\BlogBundle\Entity\Article'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'test_blogbundle_article_edit';
    }
}
