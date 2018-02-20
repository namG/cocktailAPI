<?php
/**
 * Created by PhpStorm.
 * User: nam
 * Date: 20/02/2018
 * Time: 11:44
 */
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class IngredientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Ingredients')
            ->add('search', SubmitType::class)
        ;
    }
}