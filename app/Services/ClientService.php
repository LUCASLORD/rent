<?php
namespace Locadora\Services;


use Illuminate\Support\Facades\Auth;
use Locadora\Repositories\ClientRepository;
use Locadora\Repositories\UserRepository;


class ClientService
{
    /**
     * @var ClientRepository
     */
    private $clientRepository;
    /**
     * @var UserRepository
     */
    private $userRepository;

    public function __construct(ClientRepository $clientRepository, UserRepository $userRepository)
    {
        $this->clientRepository = $clientRepository;

        $this->userRepository = $userRepository;
    }

    public function update(array $data, $id)
    {
        $this->clientRepository->update($data, $id);

        $userId = $this->clientRepository->find($id)->user_id;

        $this->userRepository->update($data['user'], $userId);
    }

    public function store(array $data)
    {
        $data['user']['password'] = bcrypt(123456);

        $userId = $this->userRepository->create($data['user'])->id;

        $data['user_id'] = $userId;

        $this->clientRepository->create($data);
    }
}