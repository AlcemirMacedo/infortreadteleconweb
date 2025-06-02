<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContatoMail;

class ContatoController extends Controller // Corrigido!
{
    public function enviarContato(Request $request)
    {
        $dados = $request->validate([
            'nome' => 'required|string',
            'email' => 'required|email',
            'contato' => 'required|string',
            'mensagem' => 'required|string',
        ]);

        Mail::to('alcemirmacedo@gmail.com')->send(new ContatoMail($dados));

        return back()->with('success', 'E-mail enviado com sucesso!');
    }
}
