<?php
include_once './blaster_load.php';
class Mysql extends Mysqlcore
{

    public $tbl_name = "data";

    public function db_show_all()
    {

        $sql = "SELECT id, col1, col2 FROM $this->tbl_name";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            echo '<div class="container bg-primary">
                    <div class="text-center bg-light py-3">
                     <table class="table table-hover caption-top">
                        <caption>DataTable view from source <b>' . $this->tbl_name .'</b></caption>
                         <thead class="bg-light text-primary">
                             <tr class="display-6">
                                 <th scope="col">#</th>
                                 <th scope="col">col1</th>
                                 <th scope="col">col2</th>
                                 <th scope="col">col3</th>
                             </tr>
                         </thead>
                         <tbody>';
            while ($row = $result->fetch_assoc()) {
                echo '
                         <tr>
                             <th scope="row">' . $row["id"] . '</th>
                             <td>' . $row["col1"] . '</td>
                             <td>' . $row["col2"] . '</td>
                             <td>@' . $row["col3"] . '</td>
                         </tr>
                         </tbody>';
            }
        } else {
                echo "<div class='container display-6 text-center bg-primary text-dark'>
                <div class='bg-light'>
                <i class='bi bi-bug text-primary text-uppercase fw-bold'> BlasterPHP: Oops :(</i>
                 <hr>SQL feedback: data source {<span class='text-primary'>". $this->tbl_name ."</span>} is empty<hr></div></div>";
        }

    }

    public function db_insert_one($bl_one, $bl_two, $bl_three)
    {
        $sql = "INSERT INTO $this->tbl_name (col1 ,col2, col3)
        VALUES ('$bl_one', '$bl_two', '$bl_three')";

    if ($this->conn->query($sql) === true) { /* do nothing */ }
             else {
            echo "<div class='container display-6 text-center bg-primary text-dark'>
                <div class='bg-light'>
                <i class='bi bi-bug text-primary text-uppercase fw-bold'> BlasterPHP: Oops :(</i>
                 <hr>SQL Error<hr>"
            . $sql .
            "<br>"
            . $this->conn->error . "</div></div>";
            // stop excuting
            exit();
        }
    }

}
