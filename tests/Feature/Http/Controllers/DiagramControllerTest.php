<?php

use App\Models\Diagrams\Diagram;
use App\Models\User;

it('shows the diagrams index page when authenticated', function () {
    $user = User::factory()->create();
    $this->actingAs($user)
        ->get(route('diagrams.index'))
        ->assertStatus(200);
});


it('dont show the diagrams index page when not authenticated', function () {
    $this->get(route('diagrams.index'))->assertStatus(302);
});


it('creates a diagram when authenticated', function () {
    $user = User::factory()->create();

    $this->actingAs($user)
        ->post(route('diagrams.store'), [
            'name' => 'Test Diagram',
            'description' => 'Test Diagram Description',
            'user_id' => $user->id,
        ])->assertRedirect(route('diagrams.index'));

    $this->assertDatabaseHas('diagrams', [
        'name' => 'Test Diagram',
        'description' => 'Test Diagram Description',
        'user_id' => $user->id,
    ]);
});


it('dont create a diagram when not authenticated', function () {
    $response = $this->post(route('diagrams.store'), [
        'name' => 'Test Diagram not auth',
        'description' => 'Test Diagram Description not auth',
        'user_id' => 1,
    ])->assertStatus(302);

    $this->assertDatabaseMissing('diagrams', [
        'name' => 'Test Diagram not auth',
        'description' => 'Test Diagram Description not auth',
    ]);
});

it('shows the diagram show page when authenticated', function () {
    $user = User::factory()->create();
    $diagram = Diagram::factory()->create([
        'user_id' => $user->id,
    ]);

    $this->actingAs($user)
        ->get(route('diagrams.show', $diagram))
        ->assertStatus(200);
});

it('shows diagram show page when it belongs to the authenticated user', function () {
    $user = User::factory()->create();
    $diagram = Diagram::factory()->create([
        'user_id' => $user->id,
    ]);

    $this->actingAs($user)
        ->get(route('diagrams.show', $diagram))
        ->assertStatus(200);
});

it('dont show diagram show page when it doesnt belong to the authenticated user', function () {
    $user1 = User::factory()->create();
    $user2 = User::factory()->create();
    $diagram = Diagram::factory()->create([
        'user_id' => $user2->id,
    ]);

    $this->actingAs($user1)
        ->get(route('diagrams.show', $diagram))
        ->assertStatus(403);
});


it('shows only diagrams that belong to the authenticated user', function () {
    $user1 = User::factory()->create();
    $user2 = User::factory()->create();
    $diagram1 = Diagram::factory()->create([
        'user_id' => $user1->id,
    ]);

    $diagram2 = Diagram::factory()->create([
        'user_id' => $user2->id,
    ]);

    $this->actingAs($user1)
        ->get(route('diagrams.index'))
        ->assertStatus(200)
        ->assertSee($diagram1->name)
        ->assertDontSee($diagram2->name);
});

it('deletes a diagram when authenticated', function () {
    $user = User::factory()->create();
    $diagram = Diagram::factory()->create([
        'user_id' => $user->id,
    ]);

    $this->actingAs($user)
        ->delete(route('diagrams.destroy', $diagram))
        ->assertRedirect(route('diagrams.index'));

    $this->assertDatabaseMissing('diagrams', [
        'id' => $diagram->id,
    ]);
});
