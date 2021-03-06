<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Groupings Controller
 *
 * @property \App\Model\Table\GroupingsTable $Groupings
 * @method \App\Model\Entity\Grouping[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GroupingsController extends AppController
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
        $groupings = $this->paginate($this->Groupings);

        $this->set(compact('groupings'));
    }

    /**
     * View method
     *
     * @param string|null $id Grouping id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $grouping = $this->Groupings->get($id, [
            'contain' => ['Projects', 'CreatedBy', 'ModifiedBy'],
        ]);

        $this->set(compact('grouping'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $grouping = $this->Groupings->newEmptyEntity();
        if ($this->request->is('post')) {
            $grouping = $this->Groupings->patchEntity($grouping, $this->request->getData());
            if ($this->Groupings->save($grouping)) {
                $this->Flash->success(__('The grouping has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The grouping could not be saved. Please, try again.'));
        }
        $projects = $this->Groupings->Projects->find('list', ['limit' => 200])->all();
        $this->set(compact('grouping', 'projects'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Grouping id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $grouping = $this->Groupings->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $grouping = $this->Groupings->patchEntity($grouping, $this->request->getData());
            if ($this->Groupings->save($grouping)) {
                $this->Flash->success(__('The grouping has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The grouping could not be saved. Please, try again.'));
        }
        $projects = $this->Groupings->Projects->find('list', ['limit' => 200])->all();
        $this->set(compact('grouping', 'projects'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Grouping id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $grouping = $this->Groupings->get($id);
        if ($this->Groupings->delete($grouping)) {
            $this->Flash->success(__('The grouping has been deleted.'));
        } else {
            $this->Flash->error(__('The grouping could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
