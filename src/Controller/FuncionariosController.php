<?php
namespace App\Controller;

use App\Controller\AppController;


class FuncionariosController extends AppController
{

    public function index()
    {
        $funcionarios = $this->paginate($this->Funcionarios);

        $this->set(compact('funcionarios'));
    }


    public function view($id = null)
    {
        $funcionario = $this->Funcionarios->get($id, [
            'contain' => [],
        ]);

        $this->set('funcionario', $funcionario);
    }

   
    public function add()
    {
        $funcionario = $this->Funcionarios->newEntity();
        if ($this->request->is('post')) {
            $funcionario = $this->Funcionarios->patchEntity($funcionario, $this->request->getData());
            if ($this->Funcionarios->save($funcionario)) {
                $this->Flash->success(__('O Funcionário foi salvo com êxito! :)'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Desculpa, mas não foi possível salvar o funcionários :(, tente novamente!'));
        }
        $this->set(compact('funcionario'));
    }

    public function edit($id = null)
    {
        $funcionario = $this->Funcionarios->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $funcionario = $this->Funcionarios->patchEntity($funcionario, $this->request->getData());
            if ($this->Funcionarios->save($funcionario)) {
                $this->Flash->success(__('O Funcionário foi salvo com êxito!! :)'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Desculpa, mas não foi possível salvar o funcionários :(, tente novamente!'));
        }
        $this->set(compact('funcionario'));
    }


    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $funcionario = $this->Funcionarios->get($id);
        if ($this->Funcionarios->delete($funcionario)) {
            $this->Flash->success(__('Funcionário deletado com sucesso!'));
        } else {
            $this->Flash->error(__('Não foi possível executar a solicitação'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
