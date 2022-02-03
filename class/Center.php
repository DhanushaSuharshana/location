<?php

/**
 * Description of User
 *
 * @author Suharshana DsW
 * @web www.nysc.lk
 */
class Center
{

    public $id;
    public $full_name;
    public $nic;
    public $age;
    public $email;
    public $contact_number;
    public $gender;
    public $date_of_birth;
    public $district_secretariat;
    public $address;
    public $religion;
    public $nationality;
    public $is_agent;
    public $whatsapp_no_1;
    public $whatsapp_no_2;
    public $description;
    public $longitude;
    public $latitude;

    public function __construct($id)
    {

        if ($id) {

            $query = "SELECT * FROM `centers` WHERE `id`=" . $id;

            $db = new Database();
            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->full_name = $result['full_name'];
            $this->nic = $result['nic'];
            $this->nationality = $result['nationality'];
            $this->religion = $result['religion'];
            $this->is_agent = $result['is_agent'];
            $this->whatsapp_no_1 = $result['whatsapp_no_1'];
            $this->whatsapp_no_2 = $result['whatsapp_no_'];
            $this->age = $result['age'];
            $this->contact_number = $result['contact_number'];
            $this->gender = $result['gender'];
            $this->email = $result['email'];
            $this->date_of_birth = $result['date_of_birth'];
            $this->district_secretariat = $result['district_secretariat'];
            $this->address = $result['address'];
            $this->description = $result['description'];
            $this->longitude = $result['longitude'];
            $this->latitude = $result['latitude'];

            return $this;
        }
    }

    public function create()
    {



        $query = "INSERT INTO `centers` (`full_name`,`nic`,`age`,`contact_number`,`religion`,`nationality`,`is_agent`,`whatsapp_no_1`,`whatsapp_no_2`,`gender`,`email`,`date_of_birth`,`district_secretariat`,`address`,`description`,`longitude`,`latitude`) VALUES  ('"
            . $this->full_name . "','"
            . $this->nic . "','"
            . $this->age . "','"
            . $this->contact_number . "','"
            . $this->religion . "','"
            . $this->nationality . "','"
            . $this->is_agent . "','"
            . $this->whatsapp_no_1 . "','"
            . $this->whatsapp_no_2 . "','"
            . $this->gender . "','"
            . $this->email . "','"
            . $this->date_of_birth . "','"
            . $this->district_secretariat . "','"
            . $this->address . "','"
            . $this->description . "','"
            . $this->longitude . "','"
            . $this->latitude . "')";
 

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {

            return mysqli_insert_id($db->DB_CON);
        } else {

            return FALSE;
        }
    }

    public function all()
    {
        $query = "SELECT * FROM `centers`";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();
        while ($row = mysqli_fetch_array($result)) {

            array_push($array_res, $row);
        }
        return $array_res;
    }

    public function update()
    {

        $query = "UPDATE  `centers` SET "
            . "`full_name` ='" . $this->full_name . "', "
            . "`age` ='" . $this->age . "', "
            . "`contact_number` ='" . $this->contact_number . "', "
            . "`contact_number` ='" . $this->gender . "', "
            . "`date_of_birth` ='" . $this->date_of_birth . "', "
            . "`district_secretariat` ='" . $this->district_secretariat . "', "
            . "`email` ='" . $this->email . "', "
            . "`address` ='" . $this->address . "', "
            . "`description` ='" . $this->description . "', "
            . "`longitude` ='" . $this->longitude . "', "
            . "`latitude` ='" . $this->latitude . "' "
            . "WHERE `id` = '" . $this->id . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {

            return $this->__construct($this->id);
        } else {

            return FALSE;
        }
    }
}
