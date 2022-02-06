<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Standards Controller
 *
 * @property \App\Model\Table\StandardsTable $Standards
 * @method \App\Model\Entity\Standard[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StandardsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projects'],
        ];
        $standards = $this->paginate($this->Standards);

        $this->set(compact('standards'));
    }

    /**
     * View method
     *
     * @param string|null $id Standard id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $standard = $this->Standards->get($id, [
            'contain' => ['Projects', 'CreatedBy', 'ModifiedBy'],
        ]);

        $this->set(compact('standard'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $standard = $this->Standards->newEmptyEntity();
        if ($this->request->is('post')) {
            $standard = $this->Standards->patchEntity($standard, $this->request->getData());
            if ($this->Standards->save($standard)) {
                $this->Flash->success(__('The standard has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The standard could not be saved. Please, try again.'));
        }
        $projects = $this->Standards->Projects->find('list', ['limit' => 200])->all();
        $this->set(compact('standard', 'projects'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Standard id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $standard = $this->Standards->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $standard = $this->Standards->patchEntity($standard, $this->request->getData());
            if ($this->Standards->save($standard)) {
                $this->Flash->success(__('The standard has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The standard could not be saved. Please, try again.'));
        }
        $projects = $this->Standards->Projects->find('list', ['limit' => 200])->all();
        $this->set(compact('standard', 'projects'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Standard id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $standard = $this->Standards->get($id);
        if ($this->Standards->delete($standard)) {
            $this->Flash->success(__('The standard has been deleted.'));
        } else {
            $this->Flash->error(__('The standard could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
