<?php

interface DAOGenerica
{
    /**
     * Armazena um objeto.
     */
    function create($descricao, $preco);

    /**
     * Busca o objeto pelo ID.
     */
    function retrieve($id);

    /**
     * Edita o objeto.
     */
    function update($id);

    /**
     * Exclui o objeto.
     */
    function delete($id);
}