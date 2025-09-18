<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Attribute;
use App\Models\CarAttributeValue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::with('attributeValues.attribute', 'attributeValues.attributeValue')->latest()->paginate(15);
        return view('admin.cars.index', compact('cars'));
    }

    public function create()
    {
        $attributes = Attribute::with('values')->orderBy('sort_order')->get();
        return view('admin.cars.create', compact('attributes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'slug'  => 'required|unique:cars,slug',
            'thumbnail' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        DB::transaction(function() use ($request) {
            // ایجاد ماشین جدید
            $car = Car::create([
                'title' => $request->title,
                'slug'  => $request->slug,
                'thumbnail' => $request->thumbnail ?? null,
                'description' => $request->description ?? null,
            ]);

            // ذخیره ویژگی‌ها
            foreach ($request->car_attributes ?? [] as $attrData) {
                if (empty($attrData['attribute_id'])) continue;

                $attribute = Attribute::find($attrData['attribute_id']);
                if (!$attribute) continue;

                $carAttr = [
                    'car_id' => $car->id,
                    'attribute_id' => $attribute->id,
                    'attribute_value_id' => null,
                    'value_string' => null,
                    'value_number' => null,
                    'value_boolean' => null,
                    'value_boolean_label' => null,
                ];

                switch ($attribute->type) {
                    case 'select':
                        $carAttr['attribute_value_id'] = $attrData['value'] ?? null;
                        break;

                    case 'boolean':
                        $carAttr['value_boolean'] = isset($attrData['value']) ? (bool)$attrData['value'] : null;
                        $carAttr['value_boolean_label'] = $attrData['value_boolean_label'] ?? $attribute->value_boolean_label;
                        break;

                    case 'number':
                    case 'range':
                        $carAttr['value_number'] = isset($attrData['value']) ? (int)$attrData['value'] : null;
                        break;

                    default: // string
                        $carAttr['value_string'] = $attrData['value'] ?? null;
                        break;
                }
                CarAttributeValue::create($carAttr);
            }
        });

        return redirect()->route('cars.index')->with('success', 'ماشین با موفقیت ایجاد شد');
    }

    public function edit(Car $car)
    {
        $attributes = Attribute::with('values')->orderBy('sort_order')->get();
        $car->load('attributeValues.attribute', 'attributeValues.attributeValue');

        return view('admin.cars.edit', compact('car','attributes'));
    }

    public function update(Request $request, Car $car)
    {
        $request->validate([
            'title' => 'required|string',
            'slug'  => 'required|unique:cars,slug,' . $car->id,
            'thumbnail' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        DB::transaction(function() use ($request, $car) {
            // بروزرسانی ماشین
            $car->update([
                'title' => $request->title,
                'slug'  => $request->slug,
                'thumbnail' => $request->thumbnail ?? null,
                'description' => $request->description ?? null,
            ]);

            // حذف مقادیر قبلی ویژگی‌ها
            $car->attributeValues()->delete();

            // ذخیره مجدد ویژگی‌ها
            foreach ($request->car_attributes ?? [] as $attrData) {
                if (empty($attrData['attribute_id'])) continue;

                $attribute = Attribute::find($attrData['attribute_id']);
                if (!$attribute) continue;

                $carAttr = [
                    'car_id' => $car->id,
                    'attribute_id' => $attribute->id,
                    'attribute_value_id' => null,
                    'value_string' => null,
                    'value_number' => null,
                    'value_boolean' => null,
                    'value_boolean_label' => null,
                ];

                switch ($attribute->type) {
                    case 'select':
                        $carAttr['attribute_value_id'] = $attrData['value'] ?? null;
                        break;

                    case 'boolean':
                        $carAttr['value_boolean'] = isset($attrData['value']) ? (bool)$attrData['value'] : null;
                        $carAttr['value_boolean_label'] = $attrData['value_boolean_label'] ?? $attribute->value_boolean_label;
                        break;

                    case 'number':
                    case 'range':
                        $carAttr['value_number'] = isset($attrData['value']) ? (int)$attrData['value'] : null;
                        break;

                    default: // string
                        $carAttr['value_string'] = $attrData['value'] ?? null;
                        break;
                }

                CarAttributeValue::create($carAttr);
            }
        });

        return redirect()->route('cars.index')->with('success', 'ماشین با موفقیت ویرایش شد');
    }

    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('cars.index')->with('success', 'ماشین حذف شد');
    }
}
