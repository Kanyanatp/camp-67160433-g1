<?php

namespace App\Http\Controllers;

use App\Models\Pokedex;
use Illuminate\Http\Request;

class PokedexController extends Controller
{
    /**
     * แสดงรายการ Pokemon ทั้งหมด (Read)
     */
    public function index()
    {
        $data['pokedexs'] = Pokedex::all();
        return view('pokedex.index', $data);
    }

    /**
     * ฟังก์ชันบันทึกข้อมูล (Create)
     */
    public function store(Request $request)
    {
        // สร้าง Object ใหม่จาก Model
        $pokemon = new Pokedex;
        $pokemon->name = $request->input('name');
        $pokemon->type = $request->input('type');
        $pokemon->species = $request->input('species');
        $pokemon->height = $request->input('height');
        $pokemon->weight = $request->input('weight');
        $pokemon->hp = $request->input('hp');
        $pokemon->attack = $request->input('attack');
        $pokemon->defense = $request->input('defense');
        $pokemon->image_url = $request->input('image_url');

        $pokemon->save();

        return redirect()->route('pokedexs.index'); // บันทึกเสร็จแล้วกลับไปหน้าแรก
    }

    /**
     * แสดงหน้าแก้ไข (Edit Form)
     */
    public function edit(string $id)
    {
        $pokemon = Pokedex::findOrFail($id);
        return view('pokedex.edit', compact('pokemon'));
    }

    /**
     * อัปเดตข้อมูล (Update)
     */
    public function update(Request $request, string $id)
    {
        $pokemon = Pokedex::findOrFail($id);

        // รับข้อมูลจากฟอร์มมาทับค่าเดิม
        $pokemon->name = $request->input('name');
        $pokemon->type = $request->input('type');
        $pokemon->species = $request->input('species');
        $pokemon->height = $request->input('height');
        $pokemon->weight = $request->input('weight');
        $pokemon->hp = $request->input('hp');
        $pokemon->attack = $request->input('attack');
        $pokemon->defense = $request->input('defense');
        $pokemon->image_url = $request->input('image_url');

        $pokemon->save();

        return redirect()->route('pokedexs.index');
    }

    /**
     * ลบข้อมูล (Delete)
     */
    public function destroy(string $id)
    {
        $pokemon = Pokedex::findOrFail($id);
        $pokemon->delete();

        return redirect()->route('pokedexs.index');
    }
}
