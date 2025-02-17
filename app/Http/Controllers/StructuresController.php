<?php

namespace App\Http\Controllers;
use App\Models\Structures;
use Illuminate\Http\Request;

class StructuresController extends Controller
{
    public function getTreeData()
    {
        $ministries = Structures::all();

        $formattedData = $ministries->map(function ($ministry) {
            return [
                'id' => $ministry->id,
                'parent' => $ministry->parent,
                'text' => $ministry->text,
                'icon' => "assets/img/gerbi.png", // Your custom icon or URL
            ];
        });

        return response()->json($formattedData);
    }
}
