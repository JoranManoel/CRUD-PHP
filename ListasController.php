<?php

class ListasController extends Controller
{

    /**
     * Listar reclamações
     */
    public function listar()
    {
        $complaint = Lista::all();
        return $this->view('grade', ['complaint' => $complaint]);
    }

    /**
     * Mostrar formulario para criar um novo item
     */
    public function criar()
    {
        return $this->view('form');
    }

    /**
     * Mostrar formulário para editar um item
     */
    public function editar($dados)
    {
        $id      = (int) $dados['id'];
        $complaint = Lista::find($id);

        return $this->view('form', ['complaint' => $complaint]);
    }

    /**
     * Salvar o item submetido pelo formulário
     */
    public function salvar()
    {
        $complaint = new Lista;
        $complaint->tipo     = $this->request->tipo;
        $complaint->descricao = $this->request->descricao;
        $complaint->data   = $this->request->data;
        $complaint->autor   = $this->request->autor;

        if ($complaint->save()) {
            return $this->listar();
        }else{
            echo "ERRO ao Salvar!";   
        }
    }
  
    /**
     * Atualizar a Lista conforme dados submetidos
     */
    public function atualizar($dados)
    {
        $id                = (int) $dados['id'];
        $complaint           = Lista::find($id);
        $complaint->tipo     = $this->request->tipo;
        $complaint->descricao = $this->request->descricao;
        $complaint->data   = $this->request->data;
        $complaint->autor   = $this->request->autor;
        $complaint->save();

        return $this->listar();
    }

    /**
     * Apagar um dado conforme o id informado
     */
    public function excluir($dados)
    {
        $id      = (int) $dados['id'];
        $cliente = Lista::destroy($id);
        return $this->listar();
    }
}