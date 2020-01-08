<?php
/**
 * ユーザーに関するRepositoryInterface
 **/
interface UserRepository
{
    public function findOne(int $id);   // 一件のユーザーを取得する
    public function add($object);  // ユーザ情報の登録
    public function remove(int $id);   // ユーザーの削除
    public function update($object); // ユーザー情報の更新
}
