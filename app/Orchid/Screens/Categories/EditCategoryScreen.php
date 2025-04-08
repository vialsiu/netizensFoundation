<?php

namespace App\Orchid\Screens\Categories;

use App\Models\Category;
use App\Orchid\Layouts\Categories\EditCategoryLayout;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Toast;

class EditCategoryScreen extends Screen
{
    /**
     * @var Category
     */
    public $category;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Category $category): iterable
    {
        return [
            'category' => $category,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->category->exists ? 'Edit Category' : 'Create Category';
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
            EditCategoryLayout::class
        ];
    }

    /**
     * Save the category
     *
     * @param Category $category
     * @param Request $request
     * @return RedirectResponse
     */
    public function save(Category $category, Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'category.category_name' => 'required|unique:categories,category_name',
            'category.icon' => 'required',
            'category.is_available' => 'required',
        ]);

        $categoryData = array_merge($validated['category'], [
            'category_slug' => Str::slug($validated['category']['category_name']),
        ]);

        $category->fill($categoryData)->save();

        Toast::info(__('Category has been saved.'));

        return redirect()->route('platform.categories.index');
    }

    /**
     * Action for cancel button
     *
     * @return RedirectResponse
     */
    public function cancel(): RedirectResponse
    {
        return redirect()->route('platform.categories.index');
    }
}
