<?php

  namespace Tests\Feature;

  use Tests\TestCase;
  use Illuminate\Foundation\Testing\RefreshDatabase;

  class CanGenerateCharacterTest extends TestCase
  {

    // use RefreshDatabase;

    public function testCanSeeAllCharacters()
    {
      $response = $this->get('/api/character');

      $response->assertStatus(200);
    }

    public function testCanGenerateACharacter()
    {

      //$this->seed();

      $response = $this->post('/api/character/generate');

      $response->assertStatus(201);
    }

    public function testDoesGeneratedCharacterHaveAName()
    {

      //$this->seed();

      $response = $this->post('/api/character/generate');

      $this->assertNotNull($response->json("name"));
    }

    public function testDoesGeneratedCharacterHaveStats()
    {

      //$this->seed();

      $response = $this->post('/api/character/generate');

      $this->assertIsInt($response->json("str"));
      $this->assertIsInt($response->json("dex"));
      $this->assertIsInt($response->json("con"));
      $this->assertIsInt($response->json("int"));
      $this->assertIsInt($response->json("wis"));
      $this->assertIsInt($response->json("cha"));
    }

    public function testDoesGeneratedCharacterHaveAClass()
    {
      //$this->seed();

      $response = $this->post('/api/character/generate');

      $this->assertNotNull($response->json("class_id"));
    }

  }
