<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\Posts;

use App\Models\Post;
use Illuminate\Support\Str;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;

class ListAllPostsLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'posts';

    /**
     * Icons for pagination
     *
     * @return array
     */
    protected function icons(): array
    {
        return [
            Layout::view('vendor.pagination.orchid'),
        ];
    }

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('id', __('ID'))
                ->sort(),

            TD::make('title', __('Title'))
                ->sort()
                ->render(function (Post $post) {
                    return $post->title;
                }),

            TD::make('content', __('Post Content'))
                ->alignCenter()
                ->render(function (Post $post) {
                    return Str::words($post->content, 5);
                }),

            TD::make('author', __('Author'))
                ->alignCenter()
                ->render(function (Post $post) {
                    return $post->user->name;
                }),

            TD::make('category', __('Category'))
                ->alignCenter()
                ->render(function (Post $post) {
                    return $post->category->category_name;
                }),

            TD::make('created_at', __('Created at'))
                ->alignCenter()
                ->render(function (Post $post) {
                    return $post->created_at->format('d/m/Y H:i');
                }),

            TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(fn(Post $post) => DropDown::make()
                    ->icon('bs.three-dots-vertical')
                    ->list([

                        Link::make(__('Edit'))
                            ->route('platform.posts.edit', $post)
                            ->icon('bs.pencil'),

                        Button::make(__('Delete'))
                            ->icon('bs.trash3')
                            ->confirm(__('Are you sure you want to delete this post?'))
                            ->method('remove', [
                                'id' => $post->id,
                            ]),

                        Button::make(__('Update Visibility'))
                            ->icon(($post->is_visible == 0) ? 'bs.eye-slash' : 'bs.eye')
                            ->confirm(__(($post->is_visible == 0) ?
                                'Are you sure you want to make this this post visible?' :
                                'Are you sure you want to make this this post invisible?')
                            )
                            ->method('updateVisibility', [
                                'id' => $post->id
                            ]),
                    ])),
        ];
    }
}
