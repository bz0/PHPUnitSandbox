<?php
class UserService
{
    private $repo; // リポジトリクラスのインスタンス
 
    public function __construct(UserRepository $repo)
    {
        $this->repo = $repo;
    }
 
    public function add($user)
    {
        return $this->repo->add($user);
    }

    public function findOne(int $id)
    {
        return $this->repo->find($id);
    }
 
    public function remove(int $id)
    {
        $this->repo->remove($id);
    }
 
    public function update($user)
    {
        return $this->repo->update($user);
    }
}
