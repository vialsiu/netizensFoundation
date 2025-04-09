<?php

namespace App\Orchid\Layouts\Categories;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Layouts\Rows;
use Orchid\Screen\Fields\Input;

class EditCategoryLayout extends Rows
{
    /**
     * Get the fields elements to be displayed.
     *
     * @return Field[]
     */
    protected function fields(): iterable
    {
        $category = $this->query->get('category');
        return [
            Input::make('category.category_name')
                ->title(__('Category Name'))
                ->type('text')
                ->max(255)
                ->placeholder('Name of the Category')
                ->value($category->category_name),

            Cropper::make('category.icon')
                ->title(__('Category Icon'))
                ->width(50)
                ->height(50)
                ->value($category->icon)
                ->targetRelativeUrl(),

            Select::make('category.is_available')
                ->options([
                    0 => 'Not Available',
                    1 => 'Available',
                ])
                ->title(__('Select Availability'))
                ->value($category->is_available),
        ];
    }
}
