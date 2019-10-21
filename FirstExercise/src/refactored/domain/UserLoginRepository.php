<?php

namespace FirstExercise;

interface UserLoginRepository
{

    public function getByEmail(): \User;

    public function getByEmailAndPassWord(): \User;

}