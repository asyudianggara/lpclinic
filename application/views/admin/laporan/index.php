      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Halaman Laporan</h3>
            </div>
          </div>

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2><?= $tabel; ?></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  
                  <?= $this->session->flashdata('pesan'); ?>

                  <!-- Separate Hidden Form for Bulk Delete -->
                  <form id="formHapusMassal" action="<?= base_url('laporan/hapus_massal'); ?>" method="post" style="display: none;">
                    <input type="hidden" name="ids" id="hidden_ids">
                  </form>

                  <div class="row mt-3" style="margin-bottom: 15px;">
                    <div class="col-md-12">
                      <button type="button" class="btn btn-danger" id="btnHapusMassal" style="border-radius: 4px; font-weight: 600; padding: 8px 16px;" disabled>
                        <i class="fa fa-trash"></i> Hapus Terpilih
                      </button>
                    </div>
                  </div>

                  <table id="datatable-buttons" class="table table-striped table-bordered table-hover">
                    <thead>
                      <tr style="background-color: #f5f7fa; color: #2c3e50;">
                        <th style="width: 40px; text-align: center; font-weight: 700; vertical-align: middle;">
                          <input type="checkbox" id="check-all" style="transform: scale(1.2); cursor: pointer;">
                        </th>
                        <th style="width: 50px; text-align: center; font-weight: 700; vertical-align: middle;">No</th>
                        <th style="width: 180px; text-align: center; font-weight: 700; vertical-align: middle;">Tanggal Diagnosa</th>
                        <th style="text-align: center; font-weight: 700; vertical-align: middle;">Nama Member</th>
                        <th style="text-align: center; font-weight: 700; vertical-align: middle;">Hasil Kerusakan</th>
                        <th style="width: 150px; text-align: center; font-weight: 700; vertical-align: middle;">Nilai Probabilitas</th>
                        <th style="width: 120px; text-align: center; font-weight: 700; vertical-align: middle;">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1; ?>
                      <?php foreach ($laporan as $l) : ?>
                        <tr style="transition: background-color 0.15s;">
                          <td style="text-align: center; vertical-align: middle;">
                            <input type="checkbox" name="id_hasil[]" value="<?= $l['id_hasil']; ?>" class="check-item" style="transform: scale(1.2); cursor: pointer;">
                          </td>
                          <td style="text-align: center; vertical-align: middle;"><?= $i; ?></td>
                          <td style="text-align: center; vertical-align: middle; font-size: 13px; font-weight: 500; color: #666;"><?= date('d F Y', $l['waktu']); ?></td>
                          <td style="vertical-align: middle; font-size: 14px; font-weight: 600; color: #34495e;"><?= $l['nama_user']; ?></td>
                          <td style="vertical-align: middle; font-size: 14px; font-weight: 500; color: #e74c3c;"><?= $l['nama_kerusakan']; ?></td>
                          <td style="text-align: center; vertical-align: middle; font-size: 15px; font-weight: 700; color: #16a085;"><?= $l['hasil_probabilitas']; ?>%</td>
                          <td style="text-align: center; vertical-align: middle;">
                            <a href="<?= base_url('laporan/hapus/') . $l['id_hasil']; ?>" class="btn btn-danger btn-xs" style="border-radius: 4px; padding: 5px 10px; font-weight: 600;" onclick="return confirm('Yakin ingin menghapus data laporan ini?');">
                              <i class="fa fa-trash"></i> Hapus
                            </a>
                          </td>
                        </tr>
                        <?php $i++; ?>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /page content -->

      <!-- Script handling select-all and button state -->
      <script>
        document.addEventListener("DOMContentLoaded", function() {
          // Wait for jQuery and DataTables to initialize
          const checkInterval = setInterval(function() {
            if (typeof $ !== 'undefined' && $.fn.DataTable) {
              clearInterval(checkInterval);
              initBulkDelete();
            }
          }, 50);

          function initBulkDelete() {
            const table = $('#datatable-buttons').DataTable();
            const checkAll = document.getElementById("check-all");
            const btnHapusMassal = document.getElementById("btnHapusMassal");
            const formHapusMassal = document.getElementById("formHapusMassal");
            const hiddenIds = document.getElementById("hidden_ids");

            function updateButtonState() {
              const checkedCount = table.$('.check-item:checked').length;
              if (checkedCount > 0) {
                btnHapusMassal.removeAttribute("disabled");
                btnHapusMassal.innerHTML = `<i class="fa fa-trash"></i> Hapus Terpilih (${checkedCount})`;
              } else {
                btnHapusMassal.setAttribute("disabled", "true");
                btnHapusMassal.innerHTML = `<i class="fa fa-trash"></i> Hapus Terpilih`;
              }
            }

            if (checkAll) {
              checkAll.addEventListener("change", function() {
                table.$('.check-item').prop('checked', checkAll.checked);
                updateButtonState();
              });
            }

            // Event delegation on table body to handle redraw/paging
            $('#datatable-buttons tbody').on('change', '.check-item', function() {
              const totalItems = table.$('.check-item').length;
              const checkedItems = table.$('.check-item:checked').length;
              if (checkAll) {
                checkAll.checked = (totalItems === checkedItems && totalItems > 0);
              }
              updateButtonState();
            });

            if (btnHapusMassal) {
              btnHapusMassal.addEventListener("click", function() {
                const checkedBoxes = table.$('.check-item:checked');
                const ids = [];
                checkedBoxes.each(function() {
                  ids.push($(this).val());
                });

                if (ids.length === 0) {
                  alert("Silakan pilih data yang ingin dihapus terlebih dahulu!");
                  return false;
                }

                if (confirm(`Yakin ingin menghapus ${ids.length} data laporan terpilih secara massal?`)) {
                  hiddenIds.value = ids.join(",");
                  formHapusMassal.submit();
                }
              });
            }
          }
        });
      </script>