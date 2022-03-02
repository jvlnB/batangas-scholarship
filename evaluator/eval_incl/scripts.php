<?php
  
if (isset($_SESSION['ms']) && $_SESSION['con'] !='')
{
  $stats = $_SESSION['ms'];
  $statsCode =$_SESSION['con'];?>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
Swal.fire(
  '<?php echo $stats; ?>',
  '',
  '<?php echo $statsCode; ?>'
)
</script>
  <?php
        unset($stats);
    }