<style>
  .symptom-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 12px;
    margin-bottom: 30px;
  }
  .symptom-card {
    background: #fff;
    border-radius: 8px;
    padding: 12px 15px;
    border: 1px solid #e2e8f0;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.02);
    transition: all 0.2s ease-in-out;
    cursor: pointer;
    display: flex;
    align-items: center;
    user-select: none;
    margin: 0;
    font-weight: normal;
    text-align: left;
  }
  .symptom-card:hover {
    border-color: #3b82f6;
    background-color: #f8fafc;
    transform: translateY(-1px);
  }
  .symptom-checkbox {
    width: 18px;
    height: 18px;
    margin-right: 12px;
    accent-color: #3b82f6;
    cursor: pointer;
    flex-shrink: 0;
  }
  .symptom-card.selected-card {
    border-color: #3b82f6;
    background-color: rgba(59, 130, 246, 0.05);
    box-shadow: 0 4px 12px rgba(59, 130, 246, 0.08);
  }
  .symptom-card.selected-card .symptom-text {
    color: #1d4ed8;
    font-weight: 600;
  }
  .symptom-card.selected-card .symptom-code {
    background: #3b82f6;
    color: #fff;
  }
  .symptom-code {
    background: #f1f5f9;
    color: #475569;
    padding: 2px 6px;
    border-radius: 4px;
    font-size: 11px;
    font-weight: 700;
    margin-right: 10px;
    flex-shrink: 0;
    transition: all 0.2s;
  }
  .symptom-text {
    font-size: 13.5px;
    color: #334155;
    margin: 0;
    line-height: 1.4;
  }
  .diagnose-container {
    background: #fff;
    border-radius: 20px;
    padding: 40px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.03);
    border: 1px solid #e2e8f0;
  }
  .diagnose-submit-btn {
    background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
    color: #fff !important;
    border: none;
    padding: 12px 40px;
    font-size: 15px;
    font-weight: 600;
    border-radius: 30px;
    box-shadow: 0 6px 20px rgba(37, 99, 235, 0.25);
    transition: all 0.3s ease;
    margin-top: 15px;
    cursor: pointer;
    display: inline-block;
  }
  .diagnose-submit-btn:hover {
    background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
    box-shadow: 0 8px 25px rgba(37, 99, 235, 0.4);
    transform: translateY(-2px);
  }
</style>

<div class="section section-features" style="background-color: #f8fafc; padding: 120px 0 80px 0;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="diagnose-container">
          <h2 class="text-center" style="font-weight: 700; color: #1e293b; margin: 0 0 10px 0;">Pilih Gejala Kerusakan</h2>
          <p class="text-center" style="color: #64748b; margin-bottom: 40px; font-size: 16px;">Pilihlah satu atau lebih gejala yang dialami oleh laptop/komputer Anda:</p>
          
          <?php if($this->session->flashdata('pesan') && strpos($this->session->flashdata('pesan'), 'Keluar') === false): ?>
            <div style="margin-bottom: 25px;">
              <?= $this->session->flashdata('pesan'); ?>
            </div>
          <?php endif; ?>

          <form action="<?= base_url('diagnosa/hasil'); ?>" method="POST">
            <div class="symptom-grid">
              <?php foreach ($gejala as $g) : ?>
                <label class="symptom-card" id="card_<?= $g['id_gejala']; ?>" for="chk_<?= $g['id_gejala']; ?>">
                  <input type="checkbox" class="symptom-checkbox" id="chk_<?= $g['id_gejala']; ?>" name="id_gejala[]" value="<?= $g['id_gejala']; ?>" onchange="toggleCardStyle(this, 'card_<?= $g['id_gejala']; ?>')">
                  <span class="symptom-code"><?= $g['kode_gejala']; ?></span>
                  <p class="symptom-text">Apakah <?= $g['nama_gejala']; ?>?</p>
                </label>
              <?php endforeach; ?>
            </div>
            
            <div class="text-center">
              <button type="submit" class="diagnose-submit-btn">
                <i class="fa fa-stethoscope"></i> Analisis Kerusakan Sekarang
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  function toggleCardStyle(checkbox, cardId) {
    const cardElement = document.getElementById(cardId);
    if (checkbox.checked) {
      cardElement.classList.add('selected-card');
    } else {
      cardElement.classList.remove('selected-card');
    }
  }
</script>