<?php
  
if (isset($_SESSION['txt']) && $_SESSION['icon'] !='')
{
  $stats = $_SESSION['txt'];
  $statsCode =$_SESSION['icon'];?>
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