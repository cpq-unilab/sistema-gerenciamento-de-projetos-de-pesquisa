<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNoticeRequest;
use App\Models\Notice;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class NoticesController extends Controller
{
    public function index()
    {
        $notices = Notice::all();
        return view('admin.notices.index', compact('notices'));
    }

    public function listToImport()
    {
        $notices = Notice::all();
        return view('admin.notices.list-to-import', compact('notices'));
    }

    public function create()
    {
        return view('admin.notices.create');
    }

    public function store(StoreNoticeRequest $request)
    {
        $notice = Notice::create($request->validated());
        if ($notice) {
            return redirect()->route('admin.notices.index')->with(['success' => 'Edital criado com sucesso!']);
        }

        return redirect()->back()->with('danger', 'Erro ao tentar gravar o edital.');
    }

    public function show(Notice $notice)
    {
        return view('admin.notices.show', compact('notice'));
    }

    public function edit(Notice $notice)
    {
        return view('admin.notices.edit', compact('notice'));
    }

    public function update(Request $request, Notice $notice)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $notice->title = $request->title;
        $notice->content = $request->content;
        $notice->save();

        return redirect()->route('admin.notices.index')->with('success', 'Notice updated successfully.');
    }

    public function destroy(Notice $notice)
    {
        $notice->delete();

        return redirect()->route('admin.notices.index')->with('success', 'Notice deleted successfully.');
    }

    public function search(Request $request)
    {
        $this->validate($request, [
            'search' => 'required',
        ]);

        $notices = Notice::where('title', 'like', '%' . $request->search . '%')->get();

        return view('admin.notices.index', compact('notices'));
    }
}
