
              
              
              <?php
              include '../dbconnection.php';
              ob_start();
session_start();
              $mid=$_GET['mid'];
              $usr=$_SESSION['police'];
              $sel1=mysqli_query($dbcon,"select * from loc where id='$mid' ");
    $r1=mysqli_fetch_row($sel1);
                        
                                                        $sel_gal1=mysqli_query($dbcon,"select * from msg where eid='$mid' order by id desc");
                                                        if(mysqli_num_rows($sel_gal1)>0)
                                                        {$i=0;
                                                        ?>
               <?php
                                                            while($r_gal1=mysqli_fetch_row($sel_gal1))
                                                            {
                                                                $pr=mysqli_query($dbcon,"select * from ser_reg where em='$r_gal1[1]'");
    $pr1=mysqli_fetch_row($pr);
                                                                $i++;
                                                                ?>
              <?php
              
              if($r_gal1[1]!="$usr")
              {
              ?>
              <?php
              if($r_gal1[6]=="1")
              {
              ?>
<div class="incoming_msg">
    <div class="incoming_msg_img"> <img  class="img img-circle " src="../img3/<?php echo $r1[4] ?>" alt="sunil"> </div>
              <div class="received_msg">
                  <div class="received_withd_msg">
                      <p ><b><span style="color: red"><?php echo $r1[2] ?>(The Victim)</b></span>
                        <br/>
                        <p><?php echo $r_gal1[3] ?>
                    </p>
                  <span class="time_date">    <?php echo $r_gal1[5] ?>|   <?php echo $r_gal1[4] ?></span></div>
              </div>
            </div>

<?php
              }
              else
              {
                  ?>
              


            <div class="incoming_msg">
              <div class="incoming_msg_img"> <img class="img img-circle" src="../img1/<?php echo $pr1[7] ?>" alt="sunil"> </div>
              <div class="received_msg">
                <div class="received_withd_msg">
                    <p><?php echo $pr1[1] ?>
                        <br/>
                        <?php echo $r_gal1[3] ?>
                    </p>
                  <span class="time_date">    <?php echo $r_gal1[5] ?>|   <?php echo $r_gal1[4] ?></span></div>
              </div>
            </div>
             <br/>
             
             
             <?php
              }
              ?>
              <?php
              }
 else {
              ?>
              <?php
              
              if($r_gal1[1]="$usr")
              {
              ?>
            <div class="outgoing_msg">
              <div class="sent_msg">
                <p><?php echo $r_gal1[3] ?></p>
                <span class="time_date">   <?php echo $r_gal1[5] ?>|   <?php echo $r_gal1[4] ?></span></div>
            </div>
            
            <?php
              }
 }
              ?>
            <?php
            
                                                            }
                                                        }
            ?>
         