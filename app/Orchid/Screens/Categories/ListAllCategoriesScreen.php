<?php

namespace App\Orchid\Screens\Categories;

use App\Models\Category;
use App\Orchid\Layouts\Categories\ListAllCategoriesLayout;
use Illuminate\Http\Request;
use Orchid\Support\Facades\Toast;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class ListAllCategoriesScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'categories' => Category::query()
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
        return 'Manage categories';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make(__('Add Category'))
                ->icon('bs.plus-circle')
                ->route('platform.categories.insert'),
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
            ListAllCategoriesLayout::class
        ];
    }

    /**
     * Method to delete a category
     * @param Request $request
     * @return void
     */
    public function remove(Request $request): void
    {
        Category::findOrFail($request->get('id'))->delete();

        Toast::info(__('Category has been deleted.'));
    }

    /**
     * Method called to toggle availability of a category
     * @param int $id
     * @return void
     */
    public function updateAvailability(int $id): void
    {
        $category = Category::findOrFail($id);
        $category->is_available = !$category->is_available;
        $category->save();

        Toast::info(__('Category availability updated.'));
    }
}
