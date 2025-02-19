<?php
class userDB {
    

    // Constructor that gets the database connection from the Database class
   


    public function addUser(User $users)

 {
        $db = Database::getDB();
        $query = 'INSERT INTO users (firstName, lastName, email, password, isActive, userTypeID, userName) 
                  VALUES (:firstName, :lastName, :email, :password, :isActive, :userTypeID, :userName )';
        $statement = $db->prepare($query);
        $statement->bindValue(':firstName', $users->getFirstName());
        $statement->bindValue(':lastName', $users->getLastName());
        $statement->bindValue(':email', $users->getEmail());
        $statement->bindValue(':password', $users->getPassword());
        $statement->bindValue(':isActive', $users->getIsActive(), PDO::PARAM_BOOL);
        $statement->bindValue(':userTypeID', 1);
        $statement->bindValue(':userName', $users->getUserName());
        $statement->execute();
        $statement->closeCursor();
    }

//
//    public function updateUser(User $user) {
//        $db = Database::getDB();
//        $query = 'UPDATE wluser SET firstName = :firstName, lastName = :lastName, password = :password, 
//                  address = :address, city = :city, email = :email, st = :state, zip = :zip, 
//                  isActive = :isActive WHERE ID = :ID';
//        $statement = $db->prepare($query);
//        $statement->bindValue(':firstName', $user->getFirstName());
//        $statement->bindValue(':lastName', $user->getLastName());
//        $statement->bindValue(':password', $user->getPassword());
//        $statement->bindValue(':address', $user->getAddress());
//        $statement->bindValue(':city', $user->getCity());
//        $statement->bindValue(':email', $user->getEmail());
//        $statement->bindValue(':state', $user->getState());
//        $statement->bindValue(':zip', $user->getZip());
//        $statement->bindValue(':isActive', $user->getIsActive(), PDO::PARAM_BOOL);
//        $statement->bindValue(':ID', $user->getID());
//        $statement->execute();
//        $statement->closeCursor();
//    }
//
//  
//    public function getUserByEmailPassword($email, $password) {
//        $db = Database::getDB();
//        $query = 'SELECT * FROM wluser WHERE email = :email AND password = :password';
//        $statement = $db->prepare($query);
//        $statement->bindValue(':email', $email);
//        $statement->bindValue(':password', $password);
//        $statement->execute();
//        $userRecord = $statement->fetch();
//        $statement->closeCursor();
//
//        if ($userRecord) {
//            $userObj = new User( 
//                $userRecord['email'],
//                $userRecord['password'],
//                $userRecord['firstName'],
//                $userRecord['lastName'],
//                $userRecord['address'],
//                $userRecord['city'],
//                $userRecord['st'],
//                $userRecord['zip'],
//                $userRecord['isActive']
//            );
//            $userObj->setID($userRecord['ID']);
//            
//            $userObj->setWlUserRoleID($userRecord['wlUserRoleID']);
//            return $userObj;
//        }
//        return null;
//    }
//
//
//    public function getUserById($id) {
//        $db = Database::getDB();
//        $query = 'SELECT * FROM wluser WHERE ID = :id';
//        $statement = $db->prepare($query);
//        $statement->bindValue(':id', $id);
//        $statement->execute();
//        $user = $statement->fetch();
//        $statement->closeCursor();
//
//        if ($user) {
//            $users = new User(
//                $user['email'],
//                $user['password'],
//                $user['firstName'],
//                $user['lastName'],
//                $user['address'],
//                $user['city'],
//                $user['st'],
//                $user['zip'],
//                $user['isActive']
//            );
//            $users->setID($user['ID']);
//            return $users;
//        }
//        return null;
//    }
//
//
//    public function getUser() {
//        $db = Database::getDB();
//        $query = 'SELECT u.ID, u.email, u.password, u.firstName, '
//                . 'u.lastName , u.address, u.city, u.st,'
//                . 'u.zip , u.isActive FROM wluser AS u';
//        $statement = $db->prepare($query);
//        $statement->execute();
//        $rows = $statement->fetchAll();
//        $statement->closeCursor();
//
//
//        
//        foreach ($rows as $row) {
//            $user = new User(
//                $row['email'],
//                $row['password'],
//                $row['firstName'],
//                $row['lastName'],
//                $row['address'],
//                $row['city'],
//                $row['st'],
//                $row['zip'],
//                $row['isActive']);
//            $user->setID($row['ID']);
//            $users[] = $user; 
//            
//        }
//        return $users;
//    }
//
//
//    public function searchUser($lastName) {
//        $db = Database::getDB();
//        $query = 'SELECT * FROM wluser WHERE lastName LIKE :lastName';
//        $statement = $db->prepare($query);
//        $statement->bindValue(':lastName', '%' . $lastName . '%');
//        $statement->execute();
//        $users = $statement->fetchAll();
//        $statement->closeCursor();
//
//        
//        $userObjs = [];
//        foreach ($users as $user) {
//            $userObjs[] = new User(
//                $user['email'],
//                $user['password'],
//                $user['firstName'],
//                $user['lastName'],
//                $user['address'],
//                $user['city'],
//                $user['st'],
//                $user['zip'],
//                $user['isActive']
//            );
//        }
//        return $userObjs;
//    }
}
?>
