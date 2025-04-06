<?php

namespace App\Orchid\Screens\Posts;

use App\Models\Post;
use App\Orchid\Layouts\Posts\PostsEditLayout;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Toast;

class EditPostScreen extends Screen
{
    /**
     * @var Post
     */
    public $post;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @param Post $post
     * @return array
     */
    public function query(Post $post): iterable
    {
        return [
            'post' => $post,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->post->exists ? 'Edit Post' : 'Create Post';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Save')
                ->icon('check')
                ->method('save'),

            Button::make('Cancel')
                ->icon('arrow-left')
                ->method('cancel'),
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
            PostsEditLayout::class,
        ];
    }

    /**
     * Save the post.
     *
     * @param Post $post
     * @param Request $request
     * @return RedirectResponse
     */
    public function save(Post $post, Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'post.title' => 'required|max:255',
            'post.slug' => 'required|max:255|unique:posts,slug',
            'post.excerpt' => 'required|max:100',
            'post.content' => 'required',
            'post.image' => 'required',
            'post.category_id' => 'required|numeric|exists:categories,id',
        ]);

        $postData = array_merge($validated['post'], [
            'author' => Auth::id(),
        ]);

        $post->fill($postData)->save();

        Toast::info(__('Post was saved.'));

        return redirect()->route('platform.posts.index');
    }

    /**
     * Action for cancel button
     *
     * @return RedirectResponse
     */
    public function cancel(): RedirectResponse
    {
        return redirect()->route('platform.posts.index');
    }
}
