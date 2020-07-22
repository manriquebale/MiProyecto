<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Vacunas Controller
 *
 * @property \App\Model\Table\VacunasTable $Vacunas
 * @method \App\Model\Entity\Vacuna[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VacunasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $vacunas = $this->paginate($this->Vacunas);

        $this->set(compact('vacunas'));
    }

    /**
     * View method
     *
     * @param string|null $id Vacuna id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vacuna = $this->Vacunas->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('vacuna'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vacuna = $this->Vacunas->newEmptyEntity();
        if ($this->request->is('post')) {
            $vacuna = $this->Vacunas->patchEntity($vacuna, $this->request->getData());
            if ($this->Vacunas->save($vacuna)) {
                $this->Flash->success(__('The vacuna has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vacuna could not be saved. Please, try again.'));
        }
        $this->set(compact('vacuna'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Vacuna id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vacuna = $this->Vacunas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vacuna = $this->Vacunas->patchEntity($vacuna, $this->request->getData());
            if ($this->Vacunas->save($vacuna)) {
                $this->Flash->success(__('The vacuna has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vacuna could not be saved. Please, try again.'));
        }
        $this->set(compact('vacuna'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Vacuna id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vacuna = $this->Vacunas->get($id);
        if ($this->Vacunas->delete($vacuna)) {
            $this->Flash->success(__('The vacuna has been deleted.'));
        } else {
            $this->Flash->error(__('The vacuna could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
