<?php
/**
 * Created by PhpStorm.
 * User: pauldossantos
 * Date: 16/11/2018
 * Time: 16:20
 */

namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleSearchType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('search')
            ->getForm();
    }

    public function getBlockPrefix(){
        return '';
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'csrf_protection' => false,
            'method' => "GET"
        ]);
    }
}