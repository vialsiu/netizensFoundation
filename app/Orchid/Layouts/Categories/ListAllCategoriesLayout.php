<?php

namespace App\Orchid\Layouts\Categories;

use App\Models\Category;
use App\Models\Post;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class ListAllCategoriesLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'categories';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('id', 'ID')
                ->alignCenter()
                ->sort(),

            TD::make('category_name', 'Category Name')
                ->alignCenter()
                ->sort(),

            TD::make('category_slug', 'Slug')
                ->alignCenter(),

            TD::make('icon', 'Category icon')
                ->alignCenter()
                ->render(function (Category $category) {
                    return "<img src='$category->icon' alt='$category->category_name'>";
                }),

            TD::make('is_available', 'Available')
                ->render(function (Category $category) {
                    return ($category->is_available == 0) ? 'Not Available' : 'Available';
                }),

            TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(fn(Category $category) => DropDown::make()
                    ->icon('bs.three-dots-vertical')
                    ->list([

                        Link::make(__('Edit'))
                            ->route('platform.categories.edit', $category)
                            ->icon('bs.pencil'),

                        Button::make(__('Delete'))
                            ->icon('bs.trash3')
                            ->confirm(__('Are you sure you want to delete this category?'))
                            ->method('remove', [
                                'id' => $category->id,
                            ]),

                        Button::make(__('Update Availability'))
                            ->icon(($category->is_available == 0) ? 'bs.eye-slash' : 'bs.eye')
                            ->confirm(__(($category->is_available == 0) ?
                                    'Are you sure you want to make this this category available?' :
                                    'Are you sure you want to make this this category unavailable?')
                            )
                            ->method('updateAvailability', [
                                'id' => $category->id
                            ]),
                    ])),
        ];
    }
}
