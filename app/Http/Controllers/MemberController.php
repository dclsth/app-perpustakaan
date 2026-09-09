<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMemberRequest;
use Illuminate\Http\Request;

class MemberController extends Controller
{

    private array $members = [
        ['id' => '1', 'nama' => 'Dara', 'nim' => '3125600016', 'email' => 'calisthadara@gmail.com', 'nomor_telepon' => '082228996192', 'alamat' => 'Surabaya', 'status' => 'aktif'],
        ['id' => '2', 'nama' => 'Chery', 'nim' => '3125600004', 'email' => 'chery@gmail.com', 'nomor_telepon' => '08123456789', 'alamat' => 'Tulungagung', 'status' => 'aktif'],
        ['id' => '3', 'nama' => 'Alifah', 'nim' => '3125600003', 'email' => 'alifah@gmail.com', 'nomor_telepon' => '08987654321', 'alamat' => 'Surabaya', 'status' => 'aktif'],
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = $this->members;

        return view('members.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $members = $this->members;

        return view('members.create', compact('members'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMemberRequest $request)
    {
        $validated = $request->validated();

        return redirect()->route('members.index')
            ->with('success', "Member \"{$validated['nama']}\" berhasil ditambahkan (data dummy, belum tersimpan ke database).");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "MemberController@show, id: {$id}";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "MemberController@edit, id: {$id}";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "MemberController@update, id: {$id}";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "MemberController@destroy, id: {$id}";
    }
}
