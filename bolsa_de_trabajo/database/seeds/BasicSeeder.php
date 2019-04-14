<?php

use Illuminate\Database\Seeder;

class BasicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuarios = factory(App\Usuarios::class,50)->create();
        App\Usuarios::all()->each(function($user){
            factory(App\Curriculums::class,1)->create(['usuarios_id'=>$user->id]);
        });
        $empresas = factory(App\Empresas::class,20)->create(['usuarios_id'=>$usuarios->random()]);
        $cargos = factory(App\Cargos::class,10)->create();
        $areas = factory(App\Areas::class,10)->create();
        

        factory(App\Vacantes::class,100)->create(['empresas_id'=>$empresas->random()])
        ->each(function($vacante) use ($cargos,$areas,$usuarios){
            $vacante->areas()->attach($areas->random(rand(1,5)));
            $vacante->cargos()->attach($cargos->random());
            $vacante->usuarios()->attach($usuarios->random(1,10));
        });
        


    }
}
