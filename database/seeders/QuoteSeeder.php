<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuoteSeeder extends Seeder
{
    public function run(): void
    {
        $quotes = [
            [
                'text' => "Et quiconque craint Allah, Il lui donnera une issue favorable, et lui accordera Ses dons par des moyens sur lesquels il ne comptait pas.",
                'reflexion' => "Cette noble parole nous rappelle que la piété et la crainte d'Allah ouvrent des portes inattendues et apportent des bénédictions inimaginables.",
                'reference' => "Coran 65:2-3",
            ],
            [
                'text' => "Celui qui fait le bien, c’est pour lui-même; et celui qui fait le mal, c’est contre lui-même.",
                'reflexion' => "Chaque action a une conséquence. Cette parole incite à réfléchir sur nos choix quotidiens.",
                'reference' => "Coran 45:15",
            ],
            [
                'text' => "Dis : 'Ô Mes serviteurs qui avez commis des excès à votre propre détriment, ne désespérez pas de la miséricorde d’Allah. Car Allah pardonne tous les péchés. Oui, c’est Lui le Pardonneur, le Très Miséricordieux.'",
                'reflexion' => "Un message d’espoir qui encourage à se repentir et à croire en la miséricorde infinie d’Allah, peu importe nos erreurs passées.",
                'reference' => "Coran 39:53",
            ],
            [
                'text' => "Et recherche ce qu’Allah t’a accordé [du bonheur] dans l’au-delà, sans oublier ta part en ce monde. Sois bon comme Allah a été bon envers toi, et ne cherche pas la corruption sur la terre.",
                'reflexion' => "Cet enseignement nous invite à équilibrer nos efforts entre ce monde et l’au-delà tout en pratiquant la bonté et la justice.",
                'reference' => "Coran 28:77",
            ],
            [
                'text' => "Et quand Mes serviteurs t’interrogent sur Moi, alors Je suis, en vérité, proche : Je réponds à l’appel de celui qui Me prie quand il Me prie.",
                'reflexion' => "Une invitation à la proximité avec Allah à travers la prière, soulignant qu’Il est toujours attentif à nos invocations.",
                'reference' => "Coran 2:186",
            ],
            [
                'text' => "Et ne désespérez pas de la miséricorde d’Allah. En vérité, nul ne désespère de la miséricorde d’Allah, sauf les gens mécréants.",
                'reflexion' => "Ce verset nous pousse à garder espoir en toutes circonstances, car le désespoir est contraire à la foi.",
                'reference' => "Coran 12:87",
            ],
            [
                'text' => "Et ne vous disputez pas, car vous échoueriez et votre force vous abandonnerait.",
                'reflexion' => "Un rappel de l’importance de l’unité et de la solidarité entre les croyants pour réussir dans nos entreprises.",
                'reference' => "Coran 8:46",
            ],
            [
                'text' => "Ô vous qui croyez ! Soyez fermes dans la justice, témoins pour Allah, même si c’est contre vous-mêmes ou vos parents ou vos proches.",
                'reflexion' => "Ce verset souligne l’importance de la justice, même lorsque cela est difficile ou personnellement coûteux.",
                'reference' => "Coran 4:135",
            ],
            [
                'text' => "Et quiconque craint Allah, Il lui donnera une issue favorable et lui accordera Ses dons par des moyens sur lesquels il ne comptait pas.",
                'reflexion' => "Un encouragement à la piété, promettant que la crainte d’Allah mène à des bénédictions inattendues.",
                'reference' => "Coran 65:2-3",
            ],
            [
                'text' => "La patience est une lumière.",
                'reflexion' => "Cette citation nous rappelle que la patience éclaire notre chemin dans les moments difficiles.",
                'reference' => "Hadith",
            ],
            [
                'text' => "Certes, avec la difficulté vient la facilité.",
                'reflexion' => "Un rappel que les épreuves sont suivies de soulagements, et qu'il faut garder espoir.",
                'reference' => "Coran 94:6",
            ],
            [
                'text' => "Le meilleur d'entre vous est celui qui est le meilleur pour sa famille.",
                'reflexion' => "Cette parole nous incite à traiter notre famille avec bonté et respect, car c'est là que commence la vraie moralité.",
                'reference' => "Hadith",
            ],
            [
                'text' => "La meilleure des œuvres est celle qui est faite avec sincérité.",
                'reflexion' => "Un rappel que l'intention derrière nos actions est primordiale pour qu'elles soient acceptées par Allah.",
                'reference' => "Hadith",
            ],

         
            [ 'text' => "Et quiconque place sa confiance en Allah, Il lui suffit.",
                'reflexion' => "Un rappel puissant que la confiance totale en Allah est une source de sérénité et de délivrance face à toute difficulté.",
                'reference' => "Coran 65:3",
            ],
            [
                'text' => "Ne marche pas sur la terre avec arrogance, car tu ne pourras jamais fendre la terre ni atteindre la hauteur des montagnes.",
                'reflexion' => "Un appel à l’humilité : l’orgueil est inutile face à la grandeur de la création d’Allah.",
                'reference' => "Coran 17:37",
            ],
            [
                'text' => "Les serviteurs du Tout Miséricordieux sont ceux qui marchent humblement sur la terre, et qui, lorsque les ignorants s’adressent à eux, répondent : 'Paix'.",
                'reflexion' => "Un modèle de comportement : humilité et paix face à la provocation.",
                'reference' => "Coran 25:63",
            ],
            [
                'text' => "Allah n’impose à aucune âme une charge supérieure à sa capacité.",
                'reflexion' => "Ce verset rassure : chaque épreuve est proportionnée à ce que nous pouvons supporter.",
                'reference' => "Coran 2:286",
            ],
            [
                'text' => "Le croyant fort est meilleur et plus aimé d’Allah que le croyant faible, tout en ayant du bien en chacun d’eux.",
                'reflexion' => "Une invitation à développer force, volonté et détermination tout en restant humble.",
                'reference' => "Hadith (Muslim)",
            ],
            [
                'text' => "Nul ne croit véritablement tant qu’il n’aime pas pour son frère ce qu’il aime pour lui-même.",
                'reflexion' => "Un rappel essentiel : la foi est liée à la fraternité et à l’altruisme.",
                'reference' => "Hadith (Bukhari et Muslim)",
            ],
            [
                'text' => "La miséricorde d’Allah est plus grande que Sa colère.",
                'reflexion' => "Un message d’espoir et d’apaisement : la miséricorde divine dépasse toujours la punition.",
                'reference' => "Hadith Qudsi",
            ],
            [
                'text' => "Ô hommes ! Nous vous avons créés d’un mâle et d’une femelle, et Nous avons fait de vous des peuples et des tribus, pour que vous vous connaissiez. Le plus noble d’entre vous, auprès d’Allah, est le plus pieux.",
                'reflexion' => "Un rappel que la vraie valeur d’une personne ne réside ni dans son origine ni dans sa tribu, mais dans sa piété.",
                'reference' => "Coran 49:13",
            ]
            


            
            // ... ici tu ajoutes jusqu'à 200 entrées
        ];

        DB::table('quotes')->insert($quotes);
    }
}
