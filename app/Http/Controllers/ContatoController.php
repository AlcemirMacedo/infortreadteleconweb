<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContatoMail;
use App\Mail\ContatoRespostaMail;

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

        // Envia email para o Administrador do site
        Mail::to('contato@infortread.com.br')->send(new ContatoMail($dados));

        // Envia um e-mail automático de resposta para quem enviou o formulário
        Mail::to($dados['email'])->send(new ContatoRespostaMail($dados));

        return redirect()->back()->with('success', 'E-mail enviado com sucesso!');
    }
}
