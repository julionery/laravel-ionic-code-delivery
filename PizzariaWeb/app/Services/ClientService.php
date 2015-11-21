<?php
/**
 * Created by PhpStorm.
 * User: Júlio
 * Date: 29/10/2015
 * Time: 23:18
 */

namespace PizzariaWeb\Services;


use PizzariaWeb\Repositories\ClientRepository;
use PizzariaWeb\Repositories\UserRepository;

class ClientService
{
    /**
     * @var UserRepository
     */
    private $userRepository;
    /**
     * @var ClientRepository
     */
    private $clientRepository;

    public function __construct(ClientRepository $clientRepository, UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
        $this->clientRepository = $clientRepository;
    }

    public function update(array $data, $id)
    {
        $this->clientRepository->update($data, $id);
        $userId = $this->clientRepository->find($id, ['user_id'])->user_id;
        $this->userRepository->update($data['user'], $userId);
    }

    public function create(array $data)
    {
        $data['user']['password']= bcrypt(123456);
        $user = $this->userRepository->create($data['user']);
        $data['user_id'] = $user->id;
        $this->clientRepository->create($data);
    }


}