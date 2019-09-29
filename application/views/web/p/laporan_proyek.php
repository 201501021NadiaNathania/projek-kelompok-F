<?php
function laporan_proyek() {
	?>
	<div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                </div>    </div>
        </div>            <div class="row">
            <div class="col-lg-12">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Table bordered</h5>
                        <table class="mb-0 table table-bordered">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Tahun</th>
                                <th>Bulan</th>
                                <th>Total Proyek Baru</th>
                                <th>Total Proyek Berjalan</th>
                                <th>Total Proyek Selesai</th>
                                <th>Total Semua Proyek</th>
                                <th>Pengeluaran Proyek</th>
                                <th>Profit Proyek</th>
                                <th>Pendapatan Proyek</th>
                                <th>Detail Karyawan</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                 <td></td>
                                <td></td>
                                <td></td>
                                 <td></td>
                                <td></td>
                                <td></td>
                                <td><button class="btn btn-secondary">Detail</button></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                               <td></td>
                                <td></td>
                                <td></td>
                                 <td></td>
                                <td></td>
                                <td></td>
                                 <td></td>
                                <td></td>
                                <td></td>
                             <td><button class="btn btn-secondary">Detail</button></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                 <td></td>
                                <td></td>
                                <td></td>
                                 <td></td>
                                <td></td>
                                <td></td>
                                <td><button class="btn btn-secondary">Detail</button></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php
}
?>

<script type="text/javascript" charset="utf-8">
	$(document).ready(function() {
	  $('#example').dataTable();
	});
    </script>
	  	  <script>
   
    $(document).ready(function() {
        $('#priceinput').keypress(function (event) {
            return isNumber(event, this)
        });
    });
  
    function isNumber(evt, element) {

        var charCode = (evt.which) ? evt.which : event.keyCode

        if (
            (charCode != 45 || $(element).val().indexOf('-') != -1) &&      
            (charCode != 46 || $(element).val().indexOf('.') != -1) &&      
            (charCode < 48 || charCode > 57))
            return false;

        return true;
    }    
</script>
