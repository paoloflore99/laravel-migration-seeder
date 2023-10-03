<?php



namespace Database\Seeders;

use App\Models\treni;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class trenisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $Faker): void
    {
        $citta = ["Milano","Roma","Torino","Venezzia","Tivoli","Colle Fiorito","pariggi"];
        $Azienda = ["Freccia rossa","Treni itali","Adriafer","Ferrotramviaria","FuoriMuro","G.T.S. Rail"];
        for ($i = 0; $i < 20; $i++){
            $treni = new treni();

            $treni->Azienda=$Azienda [array_rand($Azienda)];
            $treni->stazione_di_partenza = $citta[array_rand($citta)];
            $treni->Stazione_di_arrivo= array_rand($citta);
            $treni->Orario_di_partenza= $Faker->dateTime();
            $treni->Orario_di_arrivo= $Faker->dateTime();
            $treni->Codice_Treno= $Faker->numberBetween(0,300);
            $treni->Numero_Carrozze= $Faker->numberBetween(0,200);
            // $treni->In_orario= $Faker->boolean;
            $treni->In_Orario = $Faker->boolean ? 1 : 0;
            $treni->Cancellato= $Faker->boolean;
            $treni->prezzo= $Faker->randomFloat(2,1,999);
            $treni->save();
        }
    }
}
