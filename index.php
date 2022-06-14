<!DOCTYPE html>
<html lang="en">
<?php
include_once './blaster_load.php';
$data_table = new Mysql();
$get_text_file = new View();
$get_json = new Viewjson();
?>
<head>
  <title>Blaster PHP</title>
</head>

<body>
<p>Blaster</p>
  <main role="main">
    <div class="jumbotron py-3">
      <div class="container">
        <h1 class="display-3 text-primary pt-2 fw-bold"><img class="mb-2" src="./public/storge/logo.png" alt="" width="150" height="150">laster PHP <span>1.0.0</span></h1>
        <hr>
        <div class="text-center">
          <p class="py-3 display-6 bg-primary py-3 m-3 rounded-3" style="color: white; text-shadow: 2px 2px 4px #000000;"><b>
              <?php
              $get_text_file->set_textfile_path('./bldb/bltxt.txt');
              $get_text_file->read_file();
              $get_text_file->show();
              ?>
            </b></p>
          <hr>
        </div>
        <p class="text-center"><a class="btn btn-primary btn-lg" href="https://github.com/umarelmahedi" role="button">Created by PHP for PHP developers &raquo; <i class="bi bi-cloud-arrow-down-fill"></i></a></p>
      </div>
    </div>
  </main>

  <div class="container pt-3">
    <div class="row">
      <div class="col-md card card-footer">
        <div class="card-title">
          <div class="card-body">
            <h3 class="text-primary text-uppercase bg-dark text-center pt-3 pb-3 rounded-3">how to use </h3>
            <hr>
            <div class="">
              <div class="text-light m-2 py-2">
                <div class="container">
                  <img src="./public/storge/blaster.png" width="400" height="400" alt="">
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <br>

    <div class="row">
      <div class="container">
        <div class="card-deck">
          <div class="card card-footer">
            <div class="card-block">
              <h4 class="card-title text-uppercase text-primary bg-dark py-3 rounded-3"><span class="m-3">fetch json data from api</span></h4>
              <div class="card-text m-3">
                Class <span class="text-primary"><b>Viewjson</b></span>
                <br><br>This class is responsible of handling JSON files locally or from external url.
                <p class="text-primary"><br><b>Example:</b></p>
                <p class="text-dark">Fetch random story from third party API called -animal API- : <span class="text-primary"><a href="http://blaster.org.uk/api/dog/rand">http://blaster.org.uk/api/dog/rand</a></span> and display the response on the view, this could be done like this:</p>
                <div class="">
                  <p>Create an object from class <span class="text-primary"><b>Viewjson</b></span> we will name it <span class="text-primary"><b>get_json</b></span> -however- you can name whatever you want, now we are ready to start using the methods bellow in order to get a JSON object.<br><br><span class="text-primary"><b>Output:</b></span></p>
                  <hr>
                  <div class="bg-dark text-center  py-3 rounded-3">
                    <p class="text-success "><b>
                        <?php
                        $get_json->set_json_url('http://blaster.org.uk/api/dog/rand');
                        $get_json->fetch_json_from_url();
                        $get_json->handel_json_from_url();
                        $get_json->show_json_from_url();
                        ?>
                      </b></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer text-dark ">
              <p class="text-primary"><b>Code:</b></p>
              <hr>
              <p>$get_json = new <span class="text-primary"><b>Viewjson</b></span>();</p>
              <p>$get_json->set_json_url('<span class="text-primary">http://blaster.org.uk/api/dog/rand'</span>);</p>
              <p>$get_json->fetch_json_from_url();</p>
              <p>$get_json->handel_json_from_url();</p>
              <p>$get_json->show_json_from_url();</p>
            </div>
          </div><br>

          <div class="card card-footer">
            <div class="card-block">
              <h4 class="card-title text-uppercase text-primary bg-dark py-3 rounded-3"><span class="m-3">read json data from file</span></h4>
              <div class="card-text m-3">
                We can use class <span class="text-primary"><b>Viewjson</b></span> as well to handle JSON data stored locally
                <!-- <p class="text-success"><br> Here is example of how to read data from file stoerd locally by the use of class <span class="text-primary text-uppercase">view</span></p> -->
                <div class="">
                  <p class="text-primary"><br><b>Example:</b></p>
                  <p>We are going to use the same object we have created from class <span class="text-primary"><b>Viewjson</b></span> earlier, with new methods that can deal with local JSON files.<br><br><span class="text-primary"><b>Output:</b></span></p>
                  <hr>
                  <p class="text-center bg-dark text-success py-3 rounded-3"><b>
                      <?php
                      $get_json->set_json_path('./bldb/bljson.json');
                      $get_json->read_json_from_file();
                      $get_json->handel_json_from_file();
                      $get_json->show_json_from_file();
                      ?>
                    </b></p>
                </div>
              </div>
            </div>
            <div class="card-footer text-dark ">
              <p class="text-primary"><b>Code:</b></p>
              <hr>
              <p> $read_json = new <span class="text-primary"><b>Viewjson</b></span>();</p>
              <p>$read_json->set_json_path('<span class="text-primary">./bldb/bljson.json'</span>);</p>
              <p>$read_json->read_json_from_file();</p>
              <p>$read_json->handel_json_from_file();</p>
              <p>$read_json->show_json_from_file();</p>
            </div>
          </div><br>

          <div class="card card-footer">
            <div class="card-block">
              <h4 class="card-title text-uppercase text-primary bg-dark py-3 rounded-3"><span class="m-3">read from mysql</span></h4>
              <div class="card-text m-3">
                We can use class <span class="text-primary"><b>Viewmysql</b></span> to handle Mysql database
                <!-- <p class="text-success"><br> Here is example of how to read data from file stoerd locally by the use of class <span class="text-primary text-uppercase">view</span></p> -->
                <div class="">
                  <p class="text-primary"><br><b>Example:</b></p>
                  <p>We are able to create an object from class <span class="text-primary"><b>Viewmysql</b></span> Like we have done with other classes earlier, with new methods to deal with the database connection and the tables, make sure that you have put the required server credentials, in order to achieve the same output<br><br><span class="text-primary"><b>Output:</b></span></p>
                  <hr>
                  <div class=" table text-center bg-light py-3">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#datatable">
                      Show data
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer text-dark ">
              <p class="text-primary"><b>Code:</b></p>
              <hr>
              <p> $data_table->= new <span class="text-primary"><b>Viewmysql</b></span>();</p>
              <p> $data_table->db_connect();</p>
              <p> $data_table->db_insert_one('BlasterPHP', 'Is a PHP tool', 'BlasterPHP@blaster.org.uk');</p>
              <p> $data_table->db_show_all();</p>
            </div>
          </div><br>
          
          <!--<div class="card card-footer">-->
          <!--  <div class="card-block">-->
          <!--    <h4 class="card-title text-uppercase text-primary bg-dark py-3 rounded-3"><span class="m-3">read from mysql</span></h4>-->
          <!--    <div class="card-text m-3">-->
          <!--        <hr>-->
          <!--        <script src="https://platform.linkedin.com/badges/js/profile.js" async defer type="text/javascript"></script>-->
          <!--        <div class="badge-base LI-profile-badge" data-locale="en_US" data-size="medium" data-theme="light" data-type="VERTICAL" data-vanity="umar-elmahedi-163449175" data-version="v1"><a class="badge-base__link LI-simple-link" href="https://uk.linkedin.com/in/umar-elmahedi-163449175?trk=profile-badge">Umar Elmahedi</a></div>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</div><br>-->
          
          
        </div>
      </div>
    </div>

    <footer class="pt-4 my-md-5 pt-md-5 border-top">
      <div class="row">
        <div class="col-12 col-md">
          <img class="mb-2" src="./public/storge/logo.png" alt="" width="24" height="24">
          <small class="d-block mb-3 text-muted">&copy; 2022-2023</small>
        </div>
        <div class="col-6 col-md">
          <h5>Features</h5>
          <ul class="list-unstyled text-small">
            <li>Read text files</li>
            <li>Fetch json files</li>
            <li>Fetch json files from API</li>
            <li>CRUD Mysql</li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Clasess</h5>
          <ul class="list-unstyled text-small">
            <li>Class View</li>
            <li>Class Viewjson</li>
            <li>Class Viewmysql</li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>About</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#" data-bs-toggle="modal" data-bs-target="#team">Team</a></li>
            <li><a class="text-muted" href="https://blaster.org.uk/">Web site</a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>


  <!-- Modal -->
  <div class="modal fade modal-ku" id="datatable" tabindex="-1" aria-labelledby="datatable" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-primary" id="datatable">Datatable view tool</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <?php
          $data_table->db_connect();
        //   $data_table->db_insert_one('BlasterPHP', 'Is a PHP tool', 'BlasterPHP@blaster.org.uk');
          $data_table->db_show_all();
          ?>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
  
    <!-- Modal -->
  <div class="modal fade modal-ku" id="team" tabindex="-1" aria-labelledby="team" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-primary" id="team">Contributors</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="badge-base LI-profile-badge" data-locale="en_US" data-size="medium" data-theme="light" data-type="VERTICAL" data-vanity="umar-elmahedi-163449175" data-version="v1"><a class="badge-base__link LI-simple-link" href="https://uk.linkedin.com/in/umar-elmahedi-163449175?trk=profile-badge"></a></div>
            <script src="https://platform.linkedin.com/badges/js/profile.js" async defer type="text/javascript"></script>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
