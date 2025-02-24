<?php

/**
 * Description of Utility
 *
 * @author Andy Banagsberg
 * Used for the WishList Project
 */
class Utility {
    public static function buildStoreOptions( $selectedIndex){
        // Create the <option valuue>name</option>
        //  $listOfItems must be of the format ID, name.
        //  $selectedIndex is the id that will be set as selected, use -1 for nothing selected
        
        
         $storeDB = new storeDB();
        
        $stores = $storeDB->getStore();
        $options = "";
        
         foreach ($stores as $store){
            // Build the HTML options..."<option value='1'>Amazon</option>\n<option value='2'>Walmart</option>\n ......
            $options = $options . "<option value='".$store->getId()."'>".$store->getName()."</option>\n"; 
        }
        
        // Set the selected option
        $searchFor = "value='$selectedIndex'";             // Example:  value='2'
        $replaceWith = "value='$selectedIndex' selected "; // Example:  value='2' selected
        $options = str_replace($searchFor,$replaceWith,$options );
         
        return $options;
    }
    
    public static function buildIsActiveOptions($isActive){
        // Create the <option valuue>name</option>
        // $isActive should have the value of either: 1  or 0
        $options = "<option value='1'>Active</option>\n<option value='0'>Deleted</option>\n";
        
        // Set which one is selected
        $searchFor = "value='$isActive'";
        $replaceWith = "value='$isActive' selected ";
        
        $options = str_replace($searchFor, $replaceWith, $options );
       
        return $options;
    }
    
   public static function  getUserRoleIdFromSession(){
       $roleID = 0;
       // Look at the session and see if we are
       // 0: Not Logged in
       // 1: End User
       // 2: Administrator
      
       // See if we have a session
       if(isset($_SESSION['user'])){
           $roleID = $_SESSION['user']->getWlUserRoleID();
           // 1: End User, 2: Administroat
          
       }
       return $roleID;     
   }
   
    public static function  getUserIdFromSession(){
       $userID = 0;
       // Look at the session and see if we are
       // 0: Not Logged in
       // UserId if they are logged in.
       
      
       // See if we have a session
       if(isset($_SESSION['user'])){
           $userID = $_SESSION['user']->getID();
          
       }
       
       return $userID;     
   }
}
