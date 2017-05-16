<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Blocks Model
 *
 * @property \Cake\ORM\Association\HasMany $Entries
 *
 * @method \App\Model\Entity\Block get($primaryKey, $options = [])
 * @method \App\Model\Entity\Block newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Block[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Block|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Block patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Block[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Block findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BlocksTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('blocks');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Entries', [
            'foreignKey' => 'block_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('title');

        $validator
            ->allowEmpty('body');

        $validator
            ->allowEmpty('url');

        $validator
            ->allowEmpty('image');

        $validator
            ->allowEmpty('glyph');

        return $validator;
    }
}
