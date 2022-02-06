<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Tools Controller
 *
 * @property \App\Model\Table\ToolsTable $Tools
 * @method \App\Model\Entity\Tool[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ToolsController extends AppController
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
        $tools = $this->paginate($this->Tools);

        $this->set(compact('tools'));
    }

    /**
     * View method
     *
     * @param string|null $id Tool id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tool = $this->Tools->get($id, [
            'contain' => ['Projects', 'CreatedBy', 'ModifiedBy'],
        ]);

        $this->set(compact('tool'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tool = $this->Tools->newEmptyEntity();
        if ($this->request->is('post')) {
            $tool = $this->Tools->patchEntity($tool, $this->request->getData());
            if ($this->Tools->save($tool)) {
                $this->Flash->success(__('The tool has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tool could not be saved. Please, try again.'));
        }
        $projects = $this->Tools->Projects->find('list', ['limit' => 200])->all();
        $this->set(compact('tool', 'projects'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tool id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tool = $this->Tools->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tool = $this->Tools->patchEntity($tool, $this->request->getData());
            if ($this->Tools->save($tool)) {
                $this->Flash->success(__('The tool has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tool could not be saved. Please, try again.'));
        }
        $projects = $this->Tools->Projects->find('list', ['limit' => 200])->all();
        $this->set(compact('tool', 'projects'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tool id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tool = $this->Tools->get($id);
        if ($this->Tools->delete($tool)) {
            $this->Flash->success(__('The tool has been deleted.'));
        } else {
            $this->Flash->error(__('The tool could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
