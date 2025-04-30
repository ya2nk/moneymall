@if (Route::is('admin.slider.index'))
Slider
@elseif(Route::is('admin.slider.create'))
Create New Slider
@elseif(Route::is('admin.slider.edit'))
Edit Slider - {{ $slider->name }}
@elseif(Route::is('admin.slider.show'))
View Slider - {{ $slider->name }}
@elseif(Route::is('admin.slider.trashed'))
Trashed Slider
@endif
| Admin Panel -
{{ config('app.name') }}