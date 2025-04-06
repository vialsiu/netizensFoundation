<?php

namespace App\Orchid\Screens\Posts;

use App\Models\Post;
use App\Orchid\Layouts\Posts\ListAllPostsLayout;
use Illuminate\Http\Request;
use Orchid\Support\Facades\Toast;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class ListAllPostsScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'posts' => Post::with(['user', 'category'])
                ->paginate(config('platform.pagination.per_page', 5)),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Manage Posts';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make(__('Add Post'))
                ->icon('bs.plus-circle')
                ->route('platform.posts.insert'),
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            ListAllPostsLayout::class,
        ];
    }

    /**
     * Method called to delete a post
     * @param Request $request
     * @return void
     */
    public function remove(Request $request): void
    {
        Post::findOrFail($request->get('id'))->delete();

        Toast::info(__('Post deleted!'));
    }

    /**
     * Method called to toggle the visibility of a post
     * @param int $id
     * @return void
     */
    public function updateVisibility(int $id): void
    {
        $post = Post::findOrFail($id);
        $post->is_visible = !$post->is_visible;
        $post->save();

        Toast::info(__('Visibility updated!'));
    }
}
