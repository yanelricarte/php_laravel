<?php

namespace Tests\Feature;

use Tests\TestCase;

class PageTest extends TestCase
{
    public function test_la_pagina_de_inicio_responde_y_muestra_su_contenido(): void
    {
        $this->get('/')
            ->assertStatus(200)
            ->assertSee('Inicio')
            ->assertSee('Estamos aprendiendo Laravel paso a paso.');
    }

    public function test_la_pagina_de_materias_lista_las_materias(): void
    {
        $this->get('/materias')
            ->assertStatus(200)
            ->assertSee('Materias')
            ->assertSee('Laravel')
            ->assertSee('Proyecto Final');
    }

    public function test_la_pagina_de_contacto_muestra_los_datos(): void
    {
        $this->get('/contacto')
            ->assertStatus(200)
            ->assertSee('Contacto')
            ->assertSee('contacto@ejemplo.com');
    }
}
