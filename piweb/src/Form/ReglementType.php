<?php

namespace App\Form;

use phpDocumentor\Reflection\PseudoTypes\LiteralString;
use Symfony\Component\Console\Command\ListCommand;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ReglementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateoperation')
            ->add('montant')
        //->add('modedepaiement')
            ->add('echeancier')
            ->add('Ajouter',SubmitType::class)

            ->add('modedepaiement', ChoiceType::class, ['choices' => [' Mode du paiement' => NULL , 'Credit_card' => 'C', 'Stripe' => 'S']])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
