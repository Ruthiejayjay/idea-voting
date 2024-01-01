<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Idea;
use App\Models\Status;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShowIdeasTest extends TestCase
{
    use RefreshDatabase;

    public function test_list_ideas_shows_on_main_page(): void
    {
        $categoryOne = Category::factory()->create(['name' => 'Category 1']);
        $categoryTwo = Category::factory()->create(['name' => 'Category 2']);

        $statusOpen = Status::factory()->create(['name' => 'Open', 'classes' => 'bg-gray-200']);
        $statusConsidering = Status::factory()->create(['name' => 'Considering', 'classes' => 'bg-purple text-white']);

        $ideaOne = Idea::factory()->create([
            'title' => 'My First Idea',
            'category_id' => $categoryOne->id,
            'status_id' => $statusOpen->id,
            'description' => 'My First Description'
        ]);
        $ideaTwo = Idea::factory()->create([
            'title' => 'My Second Idea',
            'category_id' => $categoryTwo->id,
            'status_id' => $statusConsidering->id,
            'description' => 'My Second Description'
        ]);
        $response = $this->get(route('ideas.index'));
        $response->assertSuccessful();
        $response->assertSee($ideaOne->title);
        $response->assertSee($ideaOne->description);
        $response->assertSee($categoryOne->name);
        $response->assertSee('<div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">Open</div>', false);
        $response->assertSee($ideaTwo->title);
        $response->assertSee($ideaTwo->description);
        $response->assertSee($categoryTwo->name);
        $response->assertSee('<div class="bg-purple text-white text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">Considering</div>', false);
    }

    public function test_single_idea_shows_on_show_page(): void
    {
        $category = Category::factory()->create(['name' => 'Category 1']);
        $statusOpen = Status::factory()->create(['name' => 'Open', 'classes' => 'bg-gray-200']);

        $idea = Idea::factory()->create([
            'title' => 'My First Idea',
            'category_id' => $category->id,
            'status_id' => $statusOpen->id,
            'description' => 'My First Description'
        ]);
        $response = $this->get(route('idea.show', $idea));
        $response->assertSuccessful();
        $response->assertSee($idea->title);
        $response->assertSee($idea->description);
        $response->assertSee($category->name);
        $response->assertSee('<div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">Open</div>', false);
    }

    public function test_pagination_works(): void
    {
        $categoryTwo = Category::factory()->create(['name' => 'Category 2']);

        $statusOpen = Status::factory()->create(['name' => 'Open', 'classes' => 'bg-gray-200']);

        Idea::factory(idea::PAGINATION_COUNT + 1)->create([
            'category_id' => $categoryTwo->id,
            'status_id' => $statusOpen->id,
        ]);

        $ideaOne = Idea::find(1);
        $ideaOne->title = 'My First Idea';
        $ideaOne->save();

        $ideaEleven = Idea::find(11);
        $ideaEleven->title = 'My Eleventh Idea';
        $ideaEleven->save();

        $response = $this->get('/');

        $response->assertSee($ideaOne->title);
        $response->assertSee($categoryTwo->name);
        $response->assertDontSee($ideaEleven->title);

        $response = $this->get('/?page=2');

        $response->assertSee($ideaEleven->title);
        $response->assertSee($categoryTwo->name);
        $response->assertDontSee($ideaOne->title);
    }

    public function test_same_idea_title_different_slugs()
    {
        $categoryTwo = Category::factory()->create(['name' => 'Category 2']);
        $statusOpen = Status::factory()->create(['name' => 'Open', 'classes' => 'bg-gray-200']);

        $ideaOne = Idea::factory()->create([
            'title' => 'My First Idea',
            'category_id' => $categoryTwo->id,
            'status_id' => $statusOpen->id,
        ]);
        $ideaTwo = Idea::factory()->create([
            'title' => 'My First Idea',
            'category_id' => $categoryTwo->id,
            'status_id' => $statusOpen->id,
        ]);

        $this->assertEquals('my-first-idea', $ideaOne->slug);
        $this->assertEquals('my-first-idea-2', $ideaTwo->slug);
    }
}
