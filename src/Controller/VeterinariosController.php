<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Veterinarios Controller
 *
 * @property \App\Model\Table\VeterinariosTable $Veterinarios
 * @method \App\Model\Entity\Veterinario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VeterinariosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $veterinarios = $this->paginate($this->Veterinarios);

        $this->set(compact('veterinarios'));
    }

    /**
     * View method
     *
     * @param string|null $id Veterinario id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $veterinario = $this->Veterinarios->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('veterinario'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $veterinario = $this->Veterinarios->newEmptyEntity();
        if ($this->request->is('post')) {
            $veterinario = $this->Veterinarios->patchEntity($veterinario, $this->request->getData());
            if ($this->Veterinarios->save($veterinario)) {
                $this->Flash->success(__('The veterinario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The veterinario could not be saved. Please, try again.'));
        }
        $this->set(compact('veterinario'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Veterinario id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $veterinario = $this->Veterinarios->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $veterinario = $this->Veterinarios->patchEntity($veterinario, $this->request->getData());
            if ($this->Veterinarios->save($veterinario)) {
                $this->Flash->success(__('The veterinario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The veterinario could not be saved. Please, try again.'));
        }
        $this->set(compact('veterinario'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Veterinario id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $veterinario = $this->Veterinarios->get($id);
        if ($this->Veterinarios->delete($veterinario)) {
            $this->Flash->success(__('The veterinario has been deleted.'));
        } else {
            $this->Flash->error(__('The veterinario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
