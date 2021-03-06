<?php
class AdminModel
{
    // szlzct all 
    public function selectAll()
    {
        $ModelClients = new GlobalModel("admin");
        $CLIENT = $ModelClients->selectAll();
        return json_encode($CLIENT);
    }
    // select one 
    public function SelectOne($id)
    {
        $ModelClients = new GlobalModel("clients");
        $CLIENT = $ModelClients->SelectOne($id);
         json_encode($CLIENT);
    }
    // delete by id 
    public function remove($id)
    {
        $ModelClients = new GlobalModel("clients");
        $CLIENTS = $ModelClients->remove($id);
        return $CLIENTS;
    }
    // insert data in database
    public function insert($data)
    {
        $ModelClients = new GlobalModel("admin");
        $CLIENT = $ModelClients->insert($data);
        json_encode($CLIENT);
    }
    // select by Email
    public function fetchByRef($Ref)
    {
        $ModelClients = new GlobalModel("admin");
        $CLIENT = $ModelClients->fetchByRef($Ref);
        return $CLIENT;
    }
    // update profile
    public function updateUser($data)
    {
        $conn = $this->db;
        $query = $conn->prepare("UPDATE `utilisateur` SET
                                `Nom`=?,
                                `Prenom`=?,
                                `Age`=?,
                                `Job`=?,
                                `CIN`=?
                                WHERE id=?");
        $params = array($data["Nom"], $data["Prenom"], $data["Age"], $data["Job"], $data["CIN"], $data["id"]);
        return $query->execute($params);
    }
}




