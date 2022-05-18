<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ImportedNotice;
use Carbon\Carbon;

class ImportNoticesFromSigaaController extends Controller
{
    public function listNoticesToImport()
    {
        $data['noticesFromSigaa'] = (new DataFromSigaa())->allNotices();
        $data['importedLocal'] = ImportedNotice::query()->select('id_local')->get()->toArray();
        return view('admin.notices.import-from-sigaa', $data);
    }

    public function importById($id_edital)
    {
        $noticesFromSigaa = (new DataFromSigaa())->allNotices();
        foreach ($noticesFromSigaa as $noticeSigaa) {
            if ($noticeSigaa->id_edital == $id_edital) {
                $noticeSigaa->data_inicio_submissao = Carbon::parse($noticeSigaa->data_inicio_submissao)->format('d/m/Y');
                $noticeSigaa->data_fim_submissao = Carbon::parse($noticeSigaa->data_fim_submissao)->format('d/m/Y');
                $noticeSigaa->data_inicio_execucao = Carbon::parse($noticeSigaa->data_inicio_execucao)->format('d/m/Y');
                $noticeSigaa->data_fim_execucao = Carbon::parse($noticeSigaa->data_fim_execucao)->format('d/m/Y');
                return view('admin.notices.import', ['notice' => $noticeSigaa]);
            }
        }
        return redirect()->back()->with(['warning' => 'Edital não localizado']);
    }
}
