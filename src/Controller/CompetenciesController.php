<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Competencies Controller
 *
 * @property \App\Model\Table\CompetenciesTable $Competencies
 * @method \App\Model\Entity\Competency[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CompetenciesController extends AppController
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
        $competencies = $this->paginate($this->Competencies);

        $this->set(compact('competencies'));
    }

    /**
     * View method
     *
     * @param string|null $id Competency id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $competency = $this->Competencies->get($id, [
            'contain' => ['Projects', 'CreatedBy', 'ModifiedBy'],
        ]);

        $this->set(compact('competency'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $competency = $this->Competencies->newEmptyEntity();
        if ($this->request->is('post')) {
            $competency = $this->Competencies->patchEntity($competency, $this->request->getData());
            if ($this->Competencies->save($competency)) {
                $this->Flash->success(__('The competency has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The competency could not be saved. Please, try again.'));
        }
        $projects = $this->Competencies->Projects->find('list', ['limit' => 200])->all();
        $this->set(compact('competency', 'projects'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Competency id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $competency = $this->Competencies->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $competency = $this->Competencies->patchEntity($competency, $this->request->getData());
            if ($this->Competencies->save($competency)) {
                $this->Flash->success(__('The competency has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The competency could not be saved. Please, try again.'));
        }
        $projects = $this->Competencies->Projects->find('list', ['limit' => 200])->all();
        $this->set(compact('competency', 'projects'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Competency id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $competency = $this->Competencies->get($id);
        if ($this->Competencies->delete($competency)) {
            $this->Flash->success(__('The competency has been deleted.'));
        } else {
            $this->Flash->error(__('The competency could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
