<?php

/**
 * Este arquivo contém funções auxiliares para o tratamento
 * de autenticação de usuários.
 * 
 * A função hasUser() implementa a avaliação da sessão do php
 * para verificar se há um usuário definido. Quando há um usuário
 * definido, significa que há uma sessão ativida. Alguém
 * está logado no sistema.
 * 
 * A função logout() permite encerrar uma sessão com do
 * usuário e destruir seus dados presentes na sessão.
 * 
 */

function hasUser() : bool{   
    return isset($_SESSION['user']);
}

function logout () : void {
    unset($_SESSION['name']);
    unset($_SESSION['type']);
    session_destroy();
}