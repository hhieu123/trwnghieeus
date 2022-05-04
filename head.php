<?php include('config.php');?>


<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8">    <link rel="stylesheet" href="/css/vendor/dataTables.bootstrap4.min.css" /> <link rel="stylesheet" href="/css/vendor/fullcalendar.min.css" /><link rel="stylesheet" href="/css/vendor/datatables.responsive.bootstrap4.min.css" /><title>Trung Hiếu</title><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="/font/iconsmind/style.css" /><link rel="stylesheet" href="/font/simple-line-icons/css/simple-line-icons.css" /><link rel="stylesheet" href="/css/vendor/bootstrap.min.css" /><link rel="stylesheet" href="/css/vendor/select2.min.css" /><link rel="stylesheet" href="/css/vendor/perfect-scrollbar.css" /><link rel="stylesheet" href="/css/vendor/owl.carousel.min.css" /><link rel="stylesheet" href="/css/vendor/bootstrap-stars.css" /><link rel="stylesheet" href="/css/vendor/nouislider.min.css" /><link rel="stylesheet" href="/css/vendor/bootstrap-datepicker3.min.css" /><link rel="stylesheet" href="/css/main.css" />
</head><?php
if ($site_baotri == 'ON')
{
  echo '<script type="text/javascript">swal("Thông Báo", "Hệ thống đang bảo trì định kỳ, xin quý khách vui lòng quay lại sau.", "warning");</script>';
  die();
} 
?>
<script> function getDataAtt(name, data_att) {
        return $('input[name="' + name + '"]:checked').data(data_att);
    }

    function getValueRadioByName(name) {
        return $('input[name="' + name + '"]:checked').val();
    }

    function getValueByName(name) {
        return $('input[name="' + name + '"]').val();
    }

    function add_txt_price_per(prices) {
        $('#txt_price_per').text(formatNumber(parseInt(prices)));
    }

    function add_txt_quantity(prices) {
        $('#txt_quantity').text(formatNumber(parseInt(prices)));
    }

    function add_check_out_coin(prices) {
        $('#check_out_coin').text(formatNumber(parseInt(prices)));
    }

    $(document).ready(function () {
        var notify = $('#app-container').attr('new-notify');
        if (notify) {
            notify = JSON.parse(notify);
            if (!sessionStorage.getItem('notify' + notify.id)) {
                $('#notify-content').html(notify.content);
                $('#notify-modal').modal('show');
                // showSuccessModal('Thông báo',notify.content);
                sessionStorage.setItem('notify' + notify.id, notify.content);
            }
        }
    })
</script>
