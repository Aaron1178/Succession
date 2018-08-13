<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="footer-basic" style="background-color:#3b3d43;color:#686869;">
       <footer>
           <div class="social"></div>
               <ul class="list-inline">
                   <li class="list-inline-item"><a href="<?php echo base_url(); ?>index.php" style="color:#9D9EA1;">Home</a></li>
                   <li class="list-inline-item"><a href="<?php echo base_url(); ?>/index.php/terms" style="color:#9D9EA1;">Terms</a></li>
                   <li class="list-inline-item"><a href="<?php echo base_url(); ?>/index.php/privacy" style="color:#9D9EA1;">Privacy Policy</a></li>
               </ul>
               <p class="copyright">Succession © Dark Rising Studios 2018.<br></p>
       </footer>
   </div>
   <?php echo  (ENVIRONMENT === 'development') ?  '<p class="footer">Succession is still in the development stage! Succession Version <strong>'. SU_VERSION .'</strong> Page rendered in <strong>{elapsed_time}</strong> seconds. CodeIgniter Version <strong>' . CI_VERSION . '</strong></p>' : '' ?>

   <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
   <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="<?php echo base_url(); ?>assets/js/bs-animation.js"></script>
</body>
</html>