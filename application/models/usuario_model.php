<?php

class Usuario_model extends CI_Model
{
  function __contruct()
  {
    parent::__construct();
  }

  public function cadastrar()
  {
    $data['nome'] = $this->input->post('name');
    $data['cpf'] = $this->input->post('cpf');
    $data['email'] = $this->input->post('email');
    $data['senha'] = md5($this->input->post('password'));
    $data['status'] = $this->input->post('status');
    $data['nivel'] = $this->input->post('nivel');
    $data['endereco'] = $this->input->post('endereco');
    $data['cidade_idCidade'] = $this->input->post('cidade');

    return $this->db->insert('usuario', $data);
  }

  public function excluir($id=null)
  {
    $this->db->where('idUsuario', $id);

    return $this->db->delete('usuario');
  }

  public function salvar_atualizacao()
  {
    $id = $this->input->post('idUsuario');

    $data['nome'] = $this->input->post('name');
    $data['cpf'] = $this->input->post('cpf');
    $data['email'] = $this->input->post('email');
    $data['status'] = $this->input->post('status');
    $data['nivel'] = $this->input->post('nivel');
    $data['endereco'] = $this->input->post('endereco');
    $data['cidade_idCidade'] = $this->input->post('cidade');

    $this->db->where('idUsuario', $id);

    return $this->db->update('usuario', $data);
  }

  public function salvar_senha()
  {
    $id = $this->input->post('idUsuario');

    $senha_antiga = md5($this->input->post('senha_antiga'));
    $senha_nova = md5($this->input->post('senha_nova'));

    $this->db->select('senha');
    $this->db->where('idUsuario', $id);
    $data['senha'] = $this->db->get('usuario')->result();
    $dados['senha'] = $senha_nova;

    if ($data['senha'][0]->senha == $senha_antiga) {
      $this->db->where('idUsuario', $id);
      $this->db->update('usuario', $dados);

      return true;
    } else {
      return false;
    }
  }

}

?>
