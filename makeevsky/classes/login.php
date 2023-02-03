<?php 
    class login extends ACore {

        protected function obr(){
            $login = strip_tags(mysqli_real_escape_string($this->db, $_POST['login']));
            $password = strip_tags(mysqli_real_escape_string($this->db, $_POST['password']));

            if(!empty($login) and !!empty($password)){
                $password = md5($password);

                $query = "SELECT if FROM Users";
            } else {
                exit('Заполните обязаьедбные поля');
            }
        }
        public function get_content(){
            echo '<div id = "main">';
            echo("<form enctype='multipart/form-data' action='' method='POST'>
            <p>Логин:<br />
            <input type='text' name='login' style='width:420px;'>
            </p>
            <p>Пароль:<br />
            <input type='password' name='password' style='width:420px;'>
            </p>
            </select><p><input type='submit' name='button' value='Сохранить'></p></form>");
            echo "</div></div>";
        }
    }
?>