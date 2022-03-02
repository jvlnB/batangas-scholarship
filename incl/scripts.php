<?php
  
if (isset($_SESSION['status']) && $_SESSION['status_code'] !='')
{?>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
Swal.fire(
  '<?php echo $_SESSION['status']; ?>',
  '',
  '<?php echo $_SESSION['status_code']; ?>'
)
</script>
  <?php
        unset($_SESSION['status']);
        unset($_SESSION['status_code']);
    }
    ?>