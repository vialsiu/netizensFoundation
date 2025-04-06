<?php

namespace App\Orchid\Layouts\Posts;

use App\Models\Category;
use Illuminate\Contracts\Container\BindingResolutionException;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Layouts\Rows;

class PostsEditLayout extends Rows
{
    /**
     * Get the fields elements to be displayed.
     *
     * @return Field[]
     * @throws BindingResolutionException
     */
    protected function fields(): iterable
    {
        $post = $this->query->get('post');
        return [
            Input::make('post.title')
                ->type('text')
                ->max(255)
                ->title(__('Title'))
                ->placeholder(__('Insert Title'))
                ->value($post->title),

            Input::make('post.slug')
                ->type('text')
                ->title(__('Slug'))
                ->placeholder(__('Insert Slug'))
                ->value($post->slug),

            Input::make('post.excerpt')
                ->type('text')
                ->max(100)
                ->title(__('Excerpt'))
                ->placeholder(__('Add Excerpt'))
                ->value($post->excerpt),

            Quill::make('post.content')
                ->title(__('Content'))
                ->value($post->content),

            Cropper::make('post.image')
                ->title('Add a post banner')
                ->width(1000)
                ->height(500),

            Relation::make('post.category_id')
                ->fromModel(Category::class, 'category_name')
                ->title(__('Select Category'))
                ->value($post->category_id),
        ];
    }
}
